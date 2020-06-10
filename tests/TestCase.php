<?php

namespace Solrakmnk\FirstPackage\Tests;

use Solrakmnk\FirstPackage\Facades\FirstPackage;
use Solrakmnk\FirstPackage\ServiceProviders\FirstPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            FirstPackageServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'FirstPackage' => FirstPackage::class
        ];
    }
}
