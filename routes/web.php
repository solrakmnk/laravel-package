<?php

use Illuminate\Support\Facades\Route;

//Route::get('hello-route','Solrakmnk\FirstPackage\Http\Controllers\HelloController');
Route::get(config('first-package.route'),'HelloController');

?>
