<?php

namespace App;

class Dni
{

    const ALLOWED_LENGTH = 9;

    public function __construct(private string $value)
    {
        if (strlen($this->value) != self::ALLOWED_LENGTH) {
            throw new LengthException();
        }
    }


}