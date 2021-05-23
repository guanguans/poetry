<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

return [
    /*
     * App 名称
     */
    'name' => cenv('APP_NAME', 'Coole'),

    /*
     * 环境
     */
    'env' => cenv('APP_ENV', 'production'),

    /*
     * Debug
     */
    'debug' => cenv('APP_DEBUG', false),

    /*
     * 时区
     */
    'timezone' => 'Asia/Shanghai',

    /*
     * .env 文件目录
     */
    'env_path' => base_path(),

    /*
     * 配置文件目录
     */
    'config_path' => base_path('config'),

    /*
     * 第三方服务
     */
    'providers' => [
        // \App\Provider\ExampleServiceProvider::class,
    ],

    /*
     * 全局中间件
     */
    'middleware' => [
        // \App\Middleware\ExampleMiddleware::class,
    ],

    /*
     * 路由目录
     */
    'route' => [
        base_path('route'),
    ],
];
