<?php

namespace Facade;

use Facade\Imac\ImacFacade;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$Imac = new ImacFacade();
$Imac->chooseModel(rand(1, 2));
$Imac->chooseCpu(rand(1, 3));
$Imac->chooseMemory(rand(1, 3));
$Imac->chooseStorage(rand(1, 5));

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facade</title>
</head>
<body>
    <h1>Facade</h1>
    <h3>iMac</h3>
    <?=nl2br($Imac->getResult());?>
</body>
</html>
