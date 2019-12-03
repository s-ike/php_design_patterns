<?php

namespace Builder;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use Builder\Director\PeopleDirector;
use Builder\Builder\JapaneseBuilder;
use Builder\Builder\AmericanBuilder;

$people = [
    1 => 'Japanese',
    2 => 'American',
];

$target = $people[rand(1, count($people))];

$builder = new JapaneseBuilder();
if ($target === 'American') {
    $builder = new AmericanBuilder();
}
$director = new PeopleDirector($builder);
$people = $director->getPeople();

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Builder Pattern</title>
</head>
<body>
    <?php echo $people->hello() ?>
</body>
</html>
