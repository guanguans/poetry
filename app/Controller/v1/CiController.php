<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace App\Controller\v1;

use App\Model\Ci;
use Illuminate\Database\Eloquent\Builder;
use Symfony\Component\HttpFoundation\Request;

class CiController extends BaseController
{
    /**
     * 列表.
     */
    public function index(Request $request)
    {
        $parameters = $request->query->all();

        $perPage = (int) ($parameters['per_page'] ?? 10);
        if ($perPage > 50) {
            return $this->failure('数据不能超过 50 条');
        }

        $cis = Ci::query()
            ->select()
            ->where(function (Builder $query) use ($parameters) {
                isset($parameters['rhythmic']) && $query->where('rhythmic', $parameters['rhythmic']);
                isset($parameters['author']) && $query->where('author', $parameters['author']);
                isset($parameters['content']) && $query->where('content', 'like', "%{$parameters['content']}%");
            })
            ->simplePaginate($perPage, ['*'], 'page', (int) ($parameters['page'] ?? 1));

        return $this->success($cis);
    }

    /**
     * 详情.
     */
    public function show($value)
    {
        $ci = Ci::query()
            ->select()
            ->where('value', $value)
            ->first($value);

        if (empty($ci)) {
            return $this->failure('数据不存在');
        }

        return $this->success($ci);
    }

    /**
     * 随机.
     */
    public function rand($limit)
    {
        if ($limit > 50) {
            return $this->failure('数据不能超过 50 条');
        }
        if ($limit <= 1) {
            $ci = Ci::query()->select()->inRandomOrder()->limit(1)->first();

            return $this->success($ci);
        }

        $cis = Ci::query()->select()->inRandomOrder()->limit($limit)->get();

        return $this->success($cis);
    }
}
