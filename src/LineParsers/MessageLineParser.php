<?php

namespace Codelicious\Coda\LineParsers;

use Codelicious\Coda\Lines\MessageLine;
use Codelicious\Coda\Values\Message;
use Codelicious\Coda\Values\SequenceNumber;
use Codelicious\Coda\Values\SequenceNumberDetail;

/**
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class MessageLineParser implements LineParserInterface
{
    /**
     * @return MessageLine
     */
    public function parse(string $codaLine)
    {
        return new MessageLine(
            new SequenceNumber(mb_substr($codaLine, 2, 4)),
            new SequenceNumberDetail(mb_substr($codaLine, 6, 4)),
            new Message(mb_substr($codaLine, 32, 80))
        );
    }

    public function canAcceptString(string $codaLine)
    {
        return 128 == mb_strlen($codaLine) && '4' == mb_substr($codaLine, 0, 1);
    }
}
