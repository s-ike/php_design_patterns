<?php

namespace Interpreter;

use Interpreter\Context\Context;
use Interpreter\Expression\CommandExpression;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$expression = new CommandExpression();
$result = [];
try {
    $result = $expression->execute(new Context("./expressions.csv"));
} catch (\Throwable $th) {
    //throw $th;
}

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interpreter</title>
</head>
<body>
    <h1>Interpreter</h1>
    <ul>
    <?php
    foreach ($result as $key => $value) {
        echo "<li>$key = $value</li>";
    }
    ?>
    </ul>
</body>
</html>
