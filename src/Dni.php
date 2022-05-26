<?php

namespace App;

class Dni
{

    public function __construct(private string $value)
    {
        if (strlen($this->value) > 9) {
            throw new LengthException();
        }
        if (strlen($this->value) < 9) {
            throw new LengthException();
        }
    }


}