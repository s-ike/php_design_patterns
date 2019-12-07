<?php

use Singleton\Singleton;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Singleton</title>
</head>
<body>
    <?php
    echo $singleton->getId();
    echo '<br>';
    echo $singleton2->getId();
    ?>
</body>
</html>
