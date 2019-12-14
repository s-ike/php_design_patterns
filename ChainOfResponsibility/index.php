<?php

namespace ChainOFResponsibility;

use ChainOfResponsibility\Handlers\NumberValidationHandler;
use ChainOfResponsibility\Handlers\NotNullValidationHandler;
use ChainOfResponsibility\Handlers\MaxLengthValidationHandler;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$input = '';
$result;
if (isset($_POST['input'])) {
    $input = $_POST['input'];

    $notnull_validator      = new NotNullValidationHandler();
    $number_validator       = new NumberValidationHandler();
    $maxlength_validator    = new MaxLengthValidationHandler(8);

    $handler = $notnull_validator->setHandler($number_validator->setHandler($maxlength_validator));
    $result = $handler->validate($input);
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
    <title>Chain OF Responsibility</title>
</head>
<body>
    <h1>Chain OF Responsibility</h1>
    <form action="" method="post">
        <?=is_string($result) && $result !== 'OK' ? '<span style="color: #dd0000;">'.$result.'</span><br>' : ''?>
        <input type="text" name="input" id="input"
        placeholder="Only numbers" value="<?=htmlspecialchars($input, ENT_QUOTES, "UTF-8")?>">
        <input type="submit" value="Send">
    </form>
</body>
</html>
