<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Guanguans\Coole\App;
use Guanguans\Coole\Facade\Router;

// uri: /
Router::get('/', function () {
    $links = [
        ['name' => 'documentation', 'href' => 'https://www.guanguans.cn/coole'],
        ['name' => 'github', 'href' => 'https://github.com/guanguans/coole'],
        ['name' => 'coole-skeleton', 'href' => 'https://github.com/coolephp/skeleton'],
        ['name' => 'organization', 'href' => 'https://github.com/coolephp'],
    ];

    return App::render('welcome.twig', ['links' => $links]);
});

// uri: /hello OR /hello/*
Router::get('/hello/{keyword?}', [\App\Controller\IndexController::class, 'hello'])->addDefaults(['keyword' => 'Coole']);
