<?php

namespace Solrakmnk\FirstPackage\Providers;

use Illuminate\Support\ServiceProvider;
use Solrakmnk\FirstPackage\Hello;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadViewsFrom($this->basePath('resources/views/'), 'first-package');

        $this->publishes([$this->basePath('resources/views/') => resource_path('views/vendor/first-package')],
            'first-package-views');

        $this->publishes([$this->basePath('config/first-package.php') => resource_path('config/first-package.php')],
            'first-package-config');
    }

    public function register()
    {
        $this->app->bind('first-package', function () {
            return new Hello;
        });

        $this->mergeConfigFrom($this->basePath('config/first-package.php'), 'first-package');
    }

    protected function basePath($path = '')
    {
        return __DIR__ . '/../../' . $path;
    }

}
