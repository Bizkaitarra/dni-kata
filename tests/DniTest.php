<?php

namespace App\Tests;

use App\Dni;
use App\LengthException;
use PHPUnit\Framework\TestCase;

class DniTest extends TestCase
{
    public function testShouldFailWhenDniLongerThanMaxLength() {
        $this->expectException(LengthException::class);
        $dni = new Dni('1234567890');
    }

    public function testShouldNotFailWhenDniEqualsMaxLength() {
        $dni = new Dni('123456789');
        $this->assertInstanceOf(Dni::class, $dni);
    }
}