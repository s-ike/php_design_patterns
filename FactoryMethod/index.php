<?php

namespace FactoryMethod;

use FactoryMethod\Factories\IDCardFactory;
use FactoryMethod\Factories\NamePlateFactory;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$list = [
    [
        'id' => '00001',
        'name' => 'Apricot'
    ],
    [
        'id' => '00002',
        'name' => 'Strawberry'
    ],
    [
        'id' => '00003',
        'name' => 'Cherry'
    ],
    [
        'id' => '00004',
        'name' => 'Pear'
    ],
];

$cardFactory = new IDCardFactory();
$nameFactory = new NamePlateFactory();

$infolist = "<ul>";
foreach ($list as $info) {
    $infolist .= "<li>";
    $card = $cardFactory->create($info);
    $name = $nameFactory->create($info);
    $infolist .= $card->getInfo();
    $infolist .= "<br>";
    $infolist .= $name->getInfo();
    $infolist .= "</li>";
}
$infolist .= "</ul>";

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factory Method</title>
</head>
<body>
    <?=$infolist?>
</body>
</html>
