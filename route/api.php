<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Guanguans\Coole\Facade\App;
use Guanguans\Coole\Facade\Router;

Router::prefix('api/v1')->group(function () {
    // uri: /api/v1/index
    Router::get('index', function () {
        return App::json([
            'name' => 'coolephp/skeleton',
            'description' => 'This is an official framework application template for Coole.',
            'homepage' => 'https://github.com/coolephp/skeleton',
            'author' => [
                'name' => 'guanguans',
                'email' => 'ityaozm@gmail.com',
                'homepage' => 'https://www.guanguans.cn',
            ],
        ]);
    });
});
