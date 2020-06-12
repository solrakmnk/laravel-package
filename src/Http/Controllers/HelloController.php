<?php
namespace Solrakmnk\FirstPackage\Http\Controllers;


use Solrakmnk\FirstPackage\Facades\FirstPackage;

class HelloController
{
    function __invoke()
    {
        return view('first-package::home', ['message' => FirstPackage::hello()]);
    }
}

?>
