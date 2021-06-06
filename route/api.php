<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use App\Controller\v1\AuthorController;
use App\Controller\v1\CiController;
use Guanguans\Coole\Facade\Router;

Router::prefix('v1')->group(function () {
    // 词
    Router::prefix('ci')->group(function () {
        Router::get('index', [CiController::class, 'index']);
        Router::get('show/{value}', [CiController::class, 'show']);
        Router::get('rand/{limit?}', [CiController::class, 'rand']);
    });

    // 作者
    Router::prefix('author')->group(function () {
        Router::get('index', [AuthorController::class, 'index']);
        Router::get('show/{value}', [AuthorController::class, 'show']);
        Router::get('rand/{limit?}', [AuthorController::class, 'rand']);
    });
});
