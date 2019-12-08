<?php

namespace Bridge;

use Bridge\Managers\TimeSorter;
use Bridge\Methods\PhpSorterImple;
use Bridge\Methods\BubbleSorterImple;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$array = range(1, 300);
shuffle($array);

$time_php_sorter = new TimeSorter(new PhpSorterImple());
$time_bubble_sorter = new TimeSorter(new BubbleSorterImple());

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bridge</title>
</head>
<body>
    <h1>Bridge</h1>
    <h3>asort()</h3>
    <?=$time_php_sorter->timesort($array)?>
    <h3>bubble sort</h3>
    <?=$time_bubble_sorter->timesort($array)?>
</body>
</html>
