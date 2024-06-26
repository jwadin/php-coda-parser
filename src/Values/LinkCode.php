<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class LinkCode
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 1, 'LinkCode');

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
