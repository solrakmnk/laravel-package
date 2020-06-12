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

    /** @test */
    function can_get_the_message_through_a_view(){
        $this->withoutExceptionHandling();
        $this->get('hello-route')->assertViewIs('first-package::home');
    }
}
