<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class ApplicationCode
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 2, 'ApplicationCode');

        $this->value = trim($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
