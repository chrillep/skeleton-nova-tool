<?php

namespace namespace_vendor\namespace_tool_name\Tests;

use Illuminate\Support\Facades\Route;
use namespace_vendor\namespace_tool_name\ToolServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();

        Route::middlewareGroup('nova', []);
    }

    protected function getPackageProviders($app)
    {
        return [
            ToolServiceProvider::class,
        ];
    }
}
