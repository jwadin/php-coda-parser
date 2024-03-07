<?php

namespace Codelicious\Coda\Values;

use Codelicious\Coda\Exceptions\InvalidValueException;

use function Codelicious\Coda\Helpers\validateStringDigitOnly;
use function Codelicious\Coda\Helpers\validateStringLength;

class SequenceNumberDetail extends \UnexpectedValueException
{
    private int $value;

    public function __construct(string $sequenceNumberDetail)
    {
        validateStringLength($sequenceNumberDetail, 4, 'SequenceNumberDetail');
        validateStringDigitOnly($sequenceNumberDetail, 'SequenceNumberDetail');

        $value = intval($sequenceNumberDetail);
        if ($value < 0) {
            throw new InvalidValueException('SequenceNumberDetail', $sequenceNumberDetail, 'Value cannot be negative');
        }

        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
