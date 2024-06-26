<?php

namespace Codelicious\Coda\LineParsers;

use Codelicious\Coda\Lines\InformationPart3Line;
use Codelicious\Coda\Values\LinkCode;
use Codelicious\Coda\Values\Message;
use Codelicious\Coda\Values\NextCode;
use Codelicious\Coda\Values\SequenceNumber;
use Codelicious\Coda\Values\SequenceNumberDetail;

/**
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class InformationPart3LineParser implements LineParserInterface
{
    /**
     * @return InformationPart3Line
     */
    public function parse(string $codaLine)
    {
        return new InformationPart3Line(
            new SequenceNumber(mb_substr($codaLine, 2, 4)),
            new SequenceNumberDetail(mb_substr($codaLine, 6, 4)),
            new Message(mb_substr($codaLine, 10, 90)),
            new NextCode(mb_substr($codaLine, 125, 1)),
            new LinkCode(mb_substr($codaLine, 127, 1))
        );
    }

    public function canAcceptString(string $codaLine)
    {
        return 128 == mb_strlen($codaLine) && '33' == mb_substr($codaLine, 0, 2);
    }
}
