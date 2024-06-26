<?php

namespace Codelicious\Tests\Coda;

use Codelicious\Coda\Lines\LineInterface;
use Codelicious\Coda\LinesParser;

class LinesParserTest extends \PHPUnit\Framework\TestCase
{
    public function testSample1()
    {
        $parser = new LinesParser();

        /** @var LineInterface[] $result */
        $result = $parser->parseFile($this->getSamplePath('sample5.cod'));

        $this->assertCount(16, $result);
    }

    private function getSamplePath($sampleFile)
    {
        return __DIR__.DIRECTORY_SEPARATOR.'Samples'.DIRECTORY_SEPARATOR.$sampleFile;
    }
}
