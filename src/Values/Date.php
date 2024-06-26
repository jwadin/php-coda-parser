<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\formatDateString;
use function Codelicious\Coda\Helpers\validateStringDigitOnly;
use function Codelicious\Coda\Helpers\validateStringLength;

class Date
{
    private \DateTime $value;

    public function __construct(string $dateString)
    {
        validateStringLength($dateString, 6, 'Date');
        validateStringDigitOnly($dateString, 'Date');

        $this->value = new \DateTime(formatDateString($dateString));
    }

    public function getValue(): \DateTime
    {
        return $this->value;
    }
}
