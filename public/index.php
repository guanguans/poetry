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

! defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__));

require BASE_PATH.'/vendor/autoload.php';

$app = new App(require base_path('config/app.php'));

$app->run();
