<?php

namespace Codelicious\Coda\Lines;

use Codelicious\Coda\Enum;

/**
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class LineType extends Enum
{
    public const __default = self::Unknown;

    public const Unknown = -1;
    public const Identification = 00;
    public const InitialState = 10;
    public const TransactionPart1 = 21;
    public const TransactionPart2 = 22;
    public const TransactionPart3 = 23;
    public const InformationPart1 = 31;
    public const InformationPart2 = 32;
    public const InformationPart3 = 33;
    public const Message = 40;
    public const NewState = 80;
    public const EndSummary = 90;
}
