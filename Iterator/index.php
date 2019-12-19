<?php

namespace Iterator;

use Iterator\Aggregate\UsersAggregate;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$users = [
    ['name' => 'Gracey', 'age' => 18],
    ['name' => 'Aasiyah', 'age' => 20],
    ['name' => 'Rizwan', 'age' => 32],
    ['name' => 'Denny', 'age' => 24]
];

$users_aggregate = new UsersAggregate($users);
$user_iterator = $users_aggregate->iterator();

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iterator</title>
</head>
<body>
    <h1>Iterator</h1>
    <?php
    while ($user_iterator->hasNext()) {
        $user = $user_iterator->next();
        echo $user->getName(), $user->getAge(), '<br>';
    }
    ?>
</body>
</html>
