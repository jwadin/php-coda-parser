<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class FileReference
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 10, 'FileReference');

        $this->value = trim($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
