<?php

namespace Codelicious\Coda\Lines;

/**
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
interface LineInterface
{
    public function getType(): LineType;
}
