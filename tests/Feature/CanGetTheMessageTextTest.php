<?php


namespace Solrakmnk\FirstPackage\Tests\Feature;


use Solrakmnk\FirstPackage\Tests\TestCase;

class CanGetTheMessageTextTest extends TestCase
{

    /** @test */
    function can_get_the_message(){
        $this->get('hello-route')->assertSuccessful();
        $this->get('hello-route')->assertSee('Hola Carlos');
    }
}
