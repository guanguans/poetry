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

// uri: /
Router::get('/', function () {
    return App::render('welcome.twig');
});

// uri: docs
Router::get('docs', function () {
    return App::render('docs.twig');
});
