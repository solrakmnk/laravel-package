<?php

namespace Solrakmnk\FirstPackage\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Solrakmnk\FirstPackage\Hello;

class FirstPackageServiceProvider extends ServiceProvider{
    public function boot(){

    }

    public function register(){
        $this->app->bind('first-package',function(){
            return new Hello;
        });
    }

}