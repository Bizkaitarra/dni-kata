<?php

namespace App;

class Dni
{

    const ALLOWED_LENGTH = 9;

    public function __construct(private string $value)
    {
        $this->assertLengthIsOk();
        $this->assertFirstEightCharsAreNumeric();
    }

    /**
     * @return void
     */
    public function assertLengthIsOk(): void
    {
        if (strlen($this->value) != self::ALLOWED_LENGTH) {
            throw new \LengthException();
        }
    }

    /**
     * @return void
     */
    public function assertFirstEightCharsAreNumeric(): void
    {
        if (!is_numeric(substr($this->value, 0, 8))) {
            throw new \DomainException('First 8 characters should be numeric');
        }
    }


}