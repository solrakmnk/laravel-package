<?php

namespace Solrakmnk\FirstPackage\Tests;

use Solrakmnk\FirstPackage\Facades\FirstPackage;
use Solrakmnk\FirstPackage\Providers\FirstPackageServiceProvider;
use Solrakmnk\FirstPackage\Providers\RouteServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            FirstPackageServiceProvider::class,
            RouteServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'FirstPackage' => FirstPackage::class
        ];
    }
}
