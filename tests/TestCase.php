<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Tear down the test case.
     */
    public function tearDown(): void
    {
        $this->finish();
        parent::tearDown();
    }

    /**
     * Run extra tear down code.
     */
    protected function finish()
    {
        // call more tear down methods
    }
}
