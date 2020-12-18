<?php

namespace Zakmes\Console\Tests;

use Orchestra\Testbench\TestCase;
use Zakmes\Console\ConsoleServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ConsoleServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
