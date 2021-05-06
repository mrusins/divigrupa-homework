<?php

namespace Tests;

use App\Service\IsBar;
use App\Service\IsFoo;
use App\Service\IsQix;
use PHPUnit\Framework\TestCase;

class FooBarTest extends TestCase
{
    public function testFoo():void
    {
        $testIsFoo = new IsFoo(9);
        $this->assertEquals('Foo', $testIsFoo->isFoo());

        $testNotFoo = new IsFoo(8);
        $this->assertEquals(null, $testNotFoo->isFoo());

        $testStringToInt = new IsFoo('9');
        $this->assertEquals('Foo', $testStringToInt->isFoo());

        $testPositive = new IsFoo(-9);
        $this->assertEquals(null, $testPositive->isFoo());

    }
    public function testBar():void
    {
        $testIsBar = new IsBar(10);
        $this->assertEquals('Bar', $testIsBar->IsBar());

        $testNotBar = new IsBar(9);
        $this->assertEquals(null, $testNotBar->IsBar());

        $testStringToInt = new IsBar('10');
        $this->assertEquals('Bar', $testStringToInt->IsBar());

        $testPositive = new IsBar(-10);
        $this->assertEquals(null, $testPositive->IsBar());

    }

    public function testQix():void
    {
        $testIsQix = new IsQix(14);
        $this->assertEquals('Qix', $testIsQix->IsQix());

        $testNotQix = new IsQix(13);
        $this->assertEquals(null, $testNotQix->IsQix());

        $testStringToInt = new IsQix('21');
        $this->assertEquals('Qix', $testStringToInt->IsQix());

        $testPositive = new IsQix(-21);
        $this->assertEquals(null, $testPositive->IsQix());

    }

}