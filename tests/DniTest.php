<?php

namespace App\Tests;

use App\Dni;
use LengthException;
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

    public function testShouldNotFailWhenDniLessThanMinLength() {
        $this->expectException(LengthException::class);
        $dni = new Dni('12345678');
    }

    public function testFirstEightCharsShouldBeNumeric() {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('First 8 characters should be numeric');
        $dni = new Dni('1234A6789');
    }
}