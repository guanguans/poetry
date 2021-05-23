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
use Guanguans\Coole\Controller\Controller;
use Illuminate\Database\Eloquent\Builder;
use Symfony\Component\HttpFoundation\Request;

class AuthorController extends Controller
{
    /**
     * 列表.
     */
    public function index(Request $request)
    {
        $parameters = $request->query->all();

        $ciAuthors = Author::query()
            ->select()
            ->where(function (Builder $query) use ($parameters) {
                isset($parameters['name']) && $query->where('name', $parameters['name']);
                isset($parameters['long_desc']) && $query->where('long_desc', 'like', "%{$parameters['long_desc']}%");
            })
            ->paginate($parameters['per_page'] ?? null, ['*'], 'page', (int) ($parameters['page'] ?? 1));

        return $this->json($ciAuthors);
    }

    /**
     * 详情.
     */
    public function show($id)
    {
        return Author::query()->select()->first($id);
    }

    /**
     * 随机.
     */
    public function rand($limit)
    {
        if (is_null($limit) || 1 == $limit) {
            return Author::query()->select()->inRandomOrder()->limit($limit)->first();
        }

        return Author::query()->select()->inRandomOrder()->limit($limit)->get();
    }
}
