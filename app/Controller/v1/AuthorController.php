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

use App\Model\Author;
use Illuminate\Database\Eloquent\Builder;
use Symfony\Component\HttpFoundation\Request;

class AuthorController extends BaseController
{
    /**
     * 列表.
     */
    public function index(Request $request)
    {
        $parameters = array_filter($request->query->all());

        $perPage = (int) ($parameters['per_page'] ?? 10);
        if ($perPage > 50) {
            return $this->failure('数据不能超过 50 条');
        }

        $authors = Author::query()
            ->select()
            ->where(function (Builder $query) use ($parameters) {
                isset($parameters['name']) && $parameters['name'] && $query->where('name', $parameters['name']);
                isset($parameters['long_desc']) && $parameters['long_desc'] && $query->where('long_desc', 'like', "%{$parameters['long_desc']}%");
            })
            ->simplePaginate($perPage, ['*'], 'page', (int) ($parameters['page'] ?? 1));

        return $this->success($authors);
    }

    /**
     * 详情.
     */
    public function show($value)
    {
        $author = Author::query()
            ->select()
            ->where('value', $value)
            ->first();

        if (empty($author)) {
            return $this->failure('数据不存在');
        }

        return $this->success($author);
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
            $author = Author::query()->select()->inRandomOrder()->limit(1)->first();

            return $this->success($author);
        }

        $authors = Author::query()->select()->inRandomOrder()->limit((int) $limit)->get();

        return $this->success($authors);
    }
}
