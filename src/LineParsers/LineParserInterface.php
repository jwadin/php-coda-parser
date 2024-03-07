<?php

namespace Codelicious\Coda\LineParsers;

/**
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
interface LineParserInterface
{
    /**
     * Parse the given string containing into a more readable object.
     *
     * @return LineParserInterface
     */
    public function parse(string $codaLine);

    /**
     * Check if the parser take into account this type of line.
     *
     * @return bool
     */
    public function canAcceptString(string $codaLine);
}
