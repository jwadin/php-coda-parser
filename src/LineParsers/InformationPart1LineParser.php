<?php

namespace Codelicious\Coda\LineParsers;

use Codelicious\Coda\Lines\InformationPart1Line;
use Codelicious\Coda\Values\BankReference;
use Codelicious\Coda\Values\LinkCode;
use Codelicious\Coda\Values\MessageOrStructuredMessage;
use Codelicious\Coda\Values\NextCode;
use Codelicious\Coda\Values\SequenceNumber;
use Codelicious\Coda\Values\SequenceNumberDetail;
use Codelicious\Coda\Values\TransactionCode;

/**
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class InformationPart1LineParser implements LineParserInterface
{
    /**
     * @return InformationPart1Line
     */
    public function parse(string $codaLine)
    {
        $transactionCode = new TransactionCode(mb_substr($codaLine, 31, 8));

        return new InformationPart1Line(
            new SequenceNumber(mb_substr($codaLine, 2, 4)),
            new SequenceNumberDetail(mb_substr($codaLine, 6, 4)),
            new BankReference(mb_substr($codaLine, 10, 21)),
            $transactionCode,
            new MessageOrStructuredMessage(mb_substr($codaLine, 39, 74), $transactionCode),
            new NextCode(mb_substr($codaLine, 125, 1)),
            new LinkCode(mb_substr($codaLine, 127, 1))
        );
    }

    public function canAcceptString(string $codaLine)
    {
        return 128 == mb_strlen($codaLine) && '31' == mb_substr($codaLine, 0, 2);
    }
}
