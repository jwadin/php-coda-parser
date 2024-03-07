<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringMultipleLengths;

class MessageOrStructuredMessage
{
    private ?StructuredMessage $structuredMessage;
    private ?Message $message;

    public function __construct(string $value, TransactionCode $transactionCode)
    {
        validateStringMultipleLengths($value, [54, 74], 'MessageOrStructuredMessage');

        $hasStructuredMessage = ('1' === mb_substr($value, 0, 1)) ? true : false;
        $this->structuredMessage = null;
        $this->message = null;

        if ($hasStructuredMessage) {
            $this->structuredMessage = new StructuredMessage(mb_substr($value, 1), $transactionCode);
        } else {
            $this->message = new Message(mb_substr($value, 1));
        }
    }

    /** @return StructuredMessage|null */
    public function getStructuredMessage()
    {
        return $this->structuredMessage;
    }

    /** @return Message|null */
    public function getMessage()
    {
        return $this->message;
    }
}
