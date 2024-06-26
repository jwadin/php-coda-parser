<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class Bic
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 11, 'Bic');

        $this->value = trim($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
