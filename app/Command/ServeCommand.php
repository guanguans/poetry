<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace App\Command;

use Symfony\Component\Console\Input\InputOption;

class ServeCommand extends \Guanguans\Coole\Console\Commands\ServeCommand
{
    protected $options = [
        ['host', null, InputOption::VALUE_OPTIONAL, 'The host address to serve the application on', '127.0.0.1'],
        ['port', null, InputOption::VALUE_OPTIONAL, 'The port to serve the application on', 8000],
        ['docroot', null, InputOption::VALUE_REQUIRED, 'The docroot to serve the application on', BASE_PATH.'/public'],
    ];
}
