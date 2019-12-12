<?php

namespace Flyweight;

use Flyweight\Factories\CharFactory;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$chars = [
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
    'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
];

$factory = CharFactory::getInstance();

$selected_chars = [];
$count_num = count($chars) - 1;

for ($i=0; $i < 20; $i++) {
    $char = $chars[rand(0, $count_num)];
    $factory->addChar($char);
    $selected_chars[] = $char;
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
    <title>Flyweight</title>
</head>
<body>
    <h1>Flyweight</h1>
    <h3>Selected Characters</h3>
    <?php
    foreach ($selected_chars as $char) {
        echo sprintf('%s / ', $char);
    }
    ?>
    <hr>
    <h3>Objects</h3>
    <?php
    foreach ($factory->getChars() as $char_obj) {
        echo sprintf('%s / ', $char_obj->getChar());
    }
    ?>
</body>
</html>
