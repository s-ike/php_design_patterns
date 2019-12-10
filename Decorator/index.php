<?php

namespace Decorator;

use Decorator\Components\StringDisplay;
use Decorator\Decorators\Surrounds\SurroundWithBrackets;
use Decorator\Decorators\Surrounds\SurroundWithParentheses;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$display1 = new StringDisplay('Hello World!');
$display2 = new SurroundWithBrackets($display1);
$display3 = new SurroundWithParentheses($display1);

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Decorator</title>
</head>
<body>
    <h1>Decorator</h1>
    <h3><?=get_class($display1)?></h3>
    <?=$display1->show()?>
    <h3><?=get_class($display2)?></h3>
    <?=$display2->show()?>
    <h3><?=get_class($display3)?></h3>
    <?=$display3->show()?>
</body>
</html>