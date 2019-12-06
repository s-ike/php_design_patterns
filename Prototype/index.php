<?php

namespace Prototype;

use Prototype\Managers\PenManager;
use Prototype\Products\FontStylePen;
use Prototype\Products\BackgroundColorPen;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$manager    = new PenManager();
$bYellow    = new BackgroundColorPen('yellow');
$fBold      = new FontStylePen('bold');
$fItalic    = new FontStylePen('italic');
$manager->register('bYellow', $bYellow);
$manager->register('fBold', $fBold);
$manager->register('fItalic', $fItalic);

$pen1 = $manager->create('fBold');
$pen2 = $manager->create('bYellow');
$pen3 = $manager->create('fItalic');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prototype</title>
</head>
<body>
    <h1>Prototype</h1>
    <ul>
        <li><?=$pen1->use('Hello world')?></li>
        <li><?=$pen2->use('Hello world')?></li>
        <li><?=$pen3->use('Hello world')?></li>
        <li><?=$pen1->use('Hello PHP')?></li>
    </ul>
</body>
</html>
