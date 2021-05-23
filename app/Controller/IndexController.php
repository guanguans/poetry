<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace App\Controller;

use Guanguans\Coole\Controller\Controller;

class IndexController extends Controller
{
    public function hello($keyword)
    {
        return sprintf('Hello %s', $keyword);
    }
}
