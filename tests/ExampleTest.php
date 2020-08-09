<?php

namespace AqibTeam\DocsBuilder\Tests;

use Orchestra\Testbench\TestCase;
use AqibTeam\DocsBuilder\DocsBuilderServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DocsBuilderServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
