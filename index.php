<?php declare(strict_types=1);

use App\Model\Num;
use App\Service\IsBar;
use App\Service\IsFoo;
use App\Service\IsQix;

require_once 'vendor/autoload.php';

$readline = readline('Enter your number: ');
$num = intval($readline);

//multiple

for ($i = 1; $i <= $num; $i++) {

    $numModel = new Num();
    $numModel->setNumber($i);
    $number = $numModel->getNumber();

    $isFoo = new IsFoo($number);
    $isBar = new IsBar($number);
    $isQix = new IsQix($number);

    if ($isFoo->isMultiple() === null
        && $isBar->isMultiple() === null
        && $isQix->isMultiple() === null) {
        echo $i;
    } else {
        echo $isFoo->isMultiple() . $isBar->isMultiple() . $isQix->isMultiple();
    }

    echo PHP_EOL;
}

// equal

for ($i = 1; $i <= $num; $i++) {

    $loopNumber = (string)$i;
    $splitNum = str_split($loopNumber);
    $numbers = array_map('intval', $splitNum);

    echo $i . ': ';

    for ($j = 0; $j < count($numbers); $j++) {

        $numModel = new Num();
        $numModel->setNumber($numbers[$j]);
        $isFoo = new IsFoo($numModel->getNumber());
        $isBar = new IsBar($numModel->getNumber());
        $isQix = new IsQix($numModel->getNumber());

        echo $isFoo->isEqual() . $isBar->isEqual() . $isQix->isEqual();
    }
    echo PHP_EOL;


}