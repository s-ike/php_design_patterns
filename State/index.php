<?php

namespace State;

use State\Context\User;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

session_start();
$name = isset($_POST['name']) && $_POST['name'] !== '' ? $_POST['name'] : 'Anonymous';
$context = isset($_SESSION['context']) ? $_SESSION['context'] : new User($name);

$status = isset($_POST['status']) ? $_POST['status'] : '';
switch ($status) {
    case 'login':
        if (! $context->isAuthenticated()) {
            $context->switchState();
        }
        break;

    case 'logout':
        if ($context->isAuthenticated()) {
            $context->switchState();
        }
        break;

    case 'setname':
        $context->setName($name);
        break;

    case 'remove':
        $context->removeName();
        break;
}

$_SESSION['context'] = $context;

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>State</title>
</head>
<body>
    <h1>State</h1>
    <?php
    echo sprintf('Hello %s<br>', $context->getName());
    echo sprintf('Your Status: %s<br>', $context->getStatus());
    ?>
    <form action="" method="post">
        <label for="name">Name: </label><input type="text" name="name" id="name"><br>
        <?=$context->createAuthMenu();?>
    </form>
</body>
</html>
