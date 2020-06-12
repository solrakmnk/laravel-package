<?php

namespace Solrakmnk\FirstPackage\Providers;

use Illuminate\Support\ServiceProvider;
use Solrakmnk\FirstPackage\Hello;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
       // $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }

    public function register()
    {
        $this->app->bind('first-package', function () {
            return new Hello;
        });
    }

}
