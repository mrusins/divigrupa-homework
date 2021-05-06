<?php declare(strict_types=1);

namespace App\Model;

class Num
{

    private int $number;

    public function __construct(int $number){

        $this->number = $number;
    }

    public function getNumber():int{
        return $this->number;
    }
}