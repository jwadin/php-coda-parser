<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringMultipleLengths;

class StructuredMessage
{
    private string $structuredMessageType;
    private string $structuredMessage = '';
    private string $structuredMessageFull;
    private ?SepaDirectDebit $sepaDirectDebit = null;

    public function __construct(string $value, TransactionCode $transactionCode)
    {
        validateStringMultipleLengths($value, [53, 73], 'StructuredMessage');

        $this->structuredMessageType = mb_substr($value, 0, 3);
        $this->structuredMessageFull = mb_substr($value, 3);

        if ('101' == $this->structuredMessageType || '102' == $this->structuredMessageType) {
            $this->structuredMessage = mb_substr($this->structuredMessageFull, 0, 12);
        } elseif ('105' == $this->structuredMessageType && mb_strlen($this->structuredMessageFull) >= 57) {
            $this->structuredMessage = mb_substr($this->structuredMessageFull, 45, 12); // is start position 42 or 45?
        } elseif ('127' == $this->structuredMessageType && '05' == $transactionCode->getFamily()->getValue()) {
            $this->sepaDirectDebit = new SepaDirectDebit($this->structuredMessageFull);
        }
    }

    public function getType(): string
    {
        return $this->structuredMessageType;
    }

    public function getStructuredMessage(): string
    {
        return $this->structuredMessage;
    }

    public function getAll(): string
    {
        return $this->structuredMessageFull;
    }

    /** @return SepaDirectDebit|null */
    public function getSepaDirectDebit()
    {
        return $this->sepaDirectDebit;
    }
}
