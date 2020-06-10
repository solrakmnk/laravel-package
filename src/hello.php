<?php
namespace Solrakmnk\FirstPackage;

class Hello{
    protected $name;

    public function __construct($name="Carlos"){
        $this->name=$name;
    }
    function hello(){
        return "Hola ".$this->name;
    }
        
}

?>