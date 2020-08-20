<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use rcngo\PtBrNumberInFull\PtBrNumberInFull;

class PtBrNumberInFullTest extends TestCase
{
    public function testNumberInFullTest()
    {
        $numberInFull = new PtBrNumberInFull();

        $this->assertEquals($numberInFull->getFull(1, false), 'um');
        $this->assertEquals($numberInFull->getFull(200), 'duzentos reais');
        $this->assertEquals($numberInFull->getFull(1, false, true), 'uma');
    }
}