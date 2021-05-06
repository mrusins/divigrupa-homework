<?php declare(strict_types=1);

use App\Model\Num;
use App\Service\IsBar;
use App\Service\IsFoo;

require_once 'vendor/autoload.php';


$readline=readline('Enter your number: ');
$num = intval($readline);


for($i=1; $i<=$num; $i++){

    $numModel = new Num($i);

    $isFoo = new IsFoo($numModel->getNumber());
    $isBar = new IsBar($numModel->getNumber());

    echo $isFoo->isFoo();
    echo $isBar->isBar();
    echo $isFoo->isFoo() === null && $isBar->isBar() === null ? $i:null;
    echo PHP_EOL;
}

