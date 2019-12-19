<?php

namespace IteratorUsingPhpSpl;

use IteratorUsingPhpSpl\User;
use IteratorUsingPhpSpl\Aggregate\Users;
use IteratorUsingPhpSpl\Iterator\JobFilterIterator;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$data = [
    ['name' => 'Gracey', 'age' => 38, 'job' => 'engineer'],
    ['name' => 'Aasiyah', 'age' => 20, 'job' => 'sales'],
    ['name' => 'Rizwan', 'age' => 32, 'job' => 'engineer'],
    ['name' => 'Denny', 'age' => 24, 'job' => 'sales']
];

$users = new Users();
foreach ($data as $user) {
    $users->add(new User($user['name'], $user['age'], $user['job']));
}
$user_iterator = $users->getIterator();

$engineer_iterator = new JobFilterIterator($user_iterator, 'engineer');
$sales_iterator = new JobFilterIterator($user_iterator, 'sales');

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IteratorUsingPhpSpl</title>
</head>
<body>
    <h1>IteratorUsingPhpSpl</h1>
    <h3>All</h3>
    <?php
    while ($user_iterator->valid()) {
        $user = $user_iterator->current();
        echo $user->getName(), $user->getAge(), '<br>';
        $user_iterator->next();
    }
    ?>
    <h3>engineer</h3>
    <?php
    foreach ($engineer_iterator as $engineer) {
        echo $engineer->getName(), $engineer->getAge(), '<br>';
    }
    ?>
    <h3>sales</h3>
    <?php
    foreach ($sales_iterator as $sales) {
        echo $sales->getName(), $sales->getAge(), '<br>';
    }
    ?>
</body>
</html>
