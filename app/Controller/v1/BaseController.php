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

use App\Service\ResponseStatusService;
use Guanguans\Coole\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    protected $middleware = [
        \Coole\RateLimiter\RateLimiter::class,
        \Coole\Cors\Cors::class,
    ];

    public function success($data, $message = 'OK', $code = ResponseStatusService::HTTP_OK)
    {
        return $this->info($code, $data, $message);
    }

    public function failure($message = 'Bad Request', $code = Response::HTTP_BAD_REQUEST)
    {
        return $this->info($code, null, $message);
    }

    public function info(int $code = ResponseStatusService::HTTP_OK, $data = null, string $message = '')
    {
        return $this->json([
            'code' => $code,
            'data' => $data,
            'message' => $message,
        ]);
    }
}
