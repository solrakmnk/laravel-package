<?php
namespace Solrakmnk\FirstPackage;

class Hello
{
    protected $name;

    function hello($name = 'Carlos')
    {
        return "Hola {$name}";
    }

}

?>
