<?php

namespace Strategy;

use Strategy\Exchanges\EuroExchange;
use Strategy\Exchanges\ErrorExchange;
use Strategy\Exchanges\PoundExchange;
use Strategy\Exchanges\DollarExchange;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$jpy = 0;
$rate = 0.0;
$result = 0;
$exchanger = new ErrorExchange($jpy);
$hasError = false;
if (isset($_GET['amount']) && isset($_GET['rate'])) {
    $jpy = $_GET['amount'];
    $rate = $_GET['rate'];

    if (preg_match('/^[0-9]+$/', $jpy)) {
        switch ($rate) {
            case 'USD':
                $exchanger = new DollarExchange($jpy);
                break;
    
            case 'EUR':
                $exchanger = new EuroExchange($jpy);
                break;
    
            case 'GBP':
                $exchanger = new PoundExchange($jpy);
                break;
    
            default:
                $hasError = true;
                $exchanger = new ErrorExchange($jpy);
                break;
        }
    } else {
        $jpy = 0;
    }
}

$code = $exchanger->getCode();
$result = $exchanger->currencyConversion();

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strategy</title>
</head>
<body>
    <h1>Strategy</h1>
    <p>
        JPY: <?=htmlspecialchars($jpy, ENT_QUOTES, 'UTF-8')?><br>
        <?=$code?>: <?=number_format($result, 4)?>
    </p>
    <form action="" method="get">
        <label for="amount">JPY: </label><br>
        <input type="text" name="amount" id="amount" value="<?=htmlspecialchars($jpy, ENT_QUOTES, 'UTF-8')?>"><br>
        <input type="submit" name="rate" value="USD">
        <input type="submit" name="rate" value="EUR">
        <input type="submit" name="rate" value="GBP">
    </form>
</body>
</html>
