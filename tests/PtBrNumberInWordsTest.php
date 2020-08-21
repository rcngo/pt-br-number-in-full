<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use rcngo\PtBrNumberInWords\PtBrNumberInWords;

class PtBrNumberInWordsTest extends TestCase
{
    public function testNumberInFullTest()
    {
        $numberInFull = new PtBrNumberInWords();

        $this->assertEquals($numberInFull->convertToWords(1, false), 'um');
        $this->assertEquals($numberInFull->convertToWords(200), 'duzentos reais');
        $this->assertEquals($numberInFull->convertToWords(1, false, true), 'uma');
    }
}