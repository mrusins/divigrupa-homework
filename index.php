<?php declare(strict_types=1);

use App\Model\Num;

use App\Service\EqualService;
use App\Service\MultipleEqualService;
use App\Service\MultipleService;

require_once 'vendor/autoload.php';

$readline = readline('Enter your number: ');
$num = intval($readline);

//multiple

for ($i = 1; $i <= $num; $i++) {

    $isMultiple = new MultipleService();
   echo $isMultiple->isMultiple($i);

    echo PHP_EOL;
}


// equal

for ($i = 1; $i <= $num; $i++) {
    echo $i . ': ';
    $isEqual = new EqualService();
    echo $isEqual->isEqual($i);
    echo PHP_EOL;

}

// multiple-equal

for ($i = 1; $i <= $num; $i++) {
    $isEqual = new MultipleEqualService();
    echo $isEqual->isMultipleEqual($i);
    echo PHP_EOL;

}