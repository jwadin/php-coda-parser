<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class ExternalApplicationCode
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 5, 'ExternalApplicationCode');

        $this->value = trim($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
