<?php

namespace Observer;

use Observer\Subjects\Board;
use Observer\Observers\LoggingListener;
use Observer\Observers\MessageListener;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$notifications = [];
if (isset($_POST['comment'])) {
    $board = new Board();
    $board->addObserver(new LoggingListener());
    $board->addObserver(new MessageListener());
    $board->addItem('comment', $_POST['comment']);
    $notifications = $board->getResults();
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
    <title>Observer</title>
</head>
<body>
    <h1>Observer</h1>
    <?php
    if (count($notifications)) {
        echo '<ul>';
        foreach ($notifications as $notification) {
            echo '<li>', $notification, '</li>';
        }
        echo '</ul>';
    }
    ?>
    <form action="" method="post">
        <label for="comment">Comment: </label><input type="text" name="comment" id="comment"><br>
        <input type="submit" name="mode" value="add">
    </form>
</body>
</html>
