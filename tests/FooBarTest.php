<?php

namespace Tests;

use App\Model\Num;
use App\Service\IsBar;
use App\Service\IsFoo;
use App\Service\IsQix;
use PHPUnit\Framework\TestCase;

class FooBarTest extends TestCase
{
    public function testFoo(): void
    {
        $numModel = new Num();
        $numModel->setNumber(3);
        $number = $numModel->getNumber();


        $testIsFoo = new IsFoo($number);
        $this->assertEquals('Foo', $testIsFoo->isMultiple());
        $this->assertEquals('Foo', $testIsFoo->isEqual());

        $testNotFoo = new IsFoo(8);
        $this->assertEquals(null, $testNotFoo->isMultiple());
        $this->assertEquals(null, $testNotFoo->isEqual());

        $testStringToInt = new IsFoo('3');
        $this->assertEquals('Foo', $testStringToInt->isMultiple());
        $this->assertEquals('Foo', $testStringToInt->isEqual());

        $testPositive = new IsFoo(-3);
        $this->assertEquals(null, $testPositive->isMultiple());
        $this->assertEquals(null, $testPositive->isEqual());

    }

    public function testBar(): void
    {
        $numModel = new Num();
        $numModel->setNumber(5);
        $number = $numModel->getNumber();

        $testIsBar = new IsBar($number);
        $this->assertEquals('Bar', $testIsBar->isMultiple());
        $this->assertEquals('Bar', $testIsBar->isEqual());

        $testNotBar = new IsBar(9);
        $this->assertEquals(null, $testNotBar->isMultiple());
        $this->assertEquals(null, $testNotBar->isEqual());

        $testStringToInt = new IsBar('5');
        $this->assertEquals('Bar', $testStringToInt->isMultiple());
        $this->assertEquals('Bar', $testStringToInt->isEqual());

        $testPositive = new IsBar(-5);
        $this->assertEquals(null, $testPositive->isMultiple());
        $this->assertEquals(null, $testPositive->isEqual());

    }

    public function testQix(): void
    {
        $numModel = new Num();
        $numModel->setNumber(7);
        $number = $numModel->getNumber();

        $testIsQix = new IsQix($number);
        $this->assertEquals('Qix', $testIsQix->isMultiple());
        $this->assertEquals('Qix', $testIsQix->isEqual());

        $testNotQix = new IsQix(13);
        $this->assertEquals(null, $testNotQix->isMultiple());
        $this->assertEquals(null, $testNotQix->isEqual());

        $testStringToInt = new IsQix('7');
        $this->assertEquals('Qix', $testStringToInt->isMultiple());
        $this->assertEquals('Qix', $testStringToInt->isEqual());

        $testPositive = new IsQix(-7);
        $this->assertEquals(null, $testPositive->isMultiple());
        $this->assertEquals(null, $testPositive->isEqual());

    }


}