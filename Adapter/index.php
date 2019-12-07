<?php

namespace Adapter;

use Adapter\Items\UsbTypeC;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$typeC = new UsbTypeC();

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adapter</title>
</head>
<body>
    <h1><?=$typeC->getConnectorName()?></h1>
    <?=nl2br($typeC->getInfo());?>
</body>
</html>
