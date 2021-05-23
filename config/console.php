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
     * 命令
     */
    'command' => [
        [
            // 命令文件所在目录
            'dir' => base_path('app/Command/'),

            // 命令文件命名空间
            'namespace' => 'App\Command',

            // 命令文件后缀
            'suffix' => '*Command.php',
        ],
    ],
];
