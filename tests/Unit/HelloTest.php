<?php

namespace Solrakmnk\FirstPackage\Tests\Unit;

use Solrakmnk\FirstPackage\Facades\FirstPackage;
use Solrakmnk\FirstPackage\Tests\TestCase;

class HelloTest extends TestCase
{
    /** @test */
    function it_returns_the_message()
    {
        $this->assertEquals(
            "Hola Carlos",
            FirstPackage::hello()
        );

        $this->assertEquals(
            "Hola Alberto",
            FirstPackage::hello("Alberto")
        );
    }

}
