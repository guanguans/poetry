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
use Guanguans\Coole\Controller\Controller;
use Illuminate\Database\Eloquent\Builder;
use Symfony\Component\HttpFoundation\Request;

class CiController extends Controller
{
    /**
     * 列表.
     */
    public function index(Request $request)
    {
        $parameters = $request->query->all();

        $cis = Ci::query()
            ->select()
            ->where(function (Builder $query) use ($parameters) {
                isset($parameters['rhythmic']) && $query->where('rhythmic', $parameters['rhythmic']);
                isset($parameters['author']) && $query->where('author', $parameters['author']);
                isset($parameters['content']) && $query->where('content', 'like', "%{$parameters['content']}%");
            })
            ->paginate($parameters['per_page'] ?? null, ['*'], 'page', (int) ($parameters['page'] ?? 1));

        return $this->json($cis);
    }

    /**
     * 详情.
     */
    public function show($id)
    {
        return Ci::query()->select()->first($id);
    }

    /**
     * 随机.
     */
    public function rand($limit)
    {
        if (is_null($limit) || 1 == $limit) {
            return Ci::query()->select()->inRandomOrder()->limit($limit)->first();
        }

        return Ci::query()->select()->inRandomOrder()->limit($limit)->get();
    }
}
