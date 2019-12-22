<?php

namespace MediatorMementoObserver;

use MediatorMementoObserver\Mediator\Form;
use MediatorMementoObserver\Mediator\Input;
use MediatorMementoObserver\Observer\Subjects\Board;
use MediatorMementoObserver\Observer\Observers\LoggingListener;
use MediatorMementoObserver\Observer\Observers\MessageListener;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$form_mediator = new Form();
if (isset($_POST)) {
    $board = new Board();
    $board->addObserver(new LoggingListener());
    $board->addObserver(new MessageListener());

    foreach ($_POST as $key => $value) {
        $form_mediator->add(new Input($key, $value));
        $board->addItem($key, $value);
    }

    $notifications = $board->getResults();
}
$data = $form_mediator->send();

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mediator Memento Observer</title>
</head>
<body>
    <h1>Mediator Memento Observer</h1>
    <?php
    if (count($notifications)) {
        echo '<ul>';
        foreach ($notifications as $notification) {
            if ($notification) {
                echo '<li>', $notification, '</li>';
            }
        }
        echo '</ul>';
    }
    echo '<br>';
    if ($data) {
        echo '<ol>';
        foreach ($data->getComments() as $comment) {
            echo '<li>', htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'), '</li>';
        }
        echo '</ol>';
    }
    ?>
    <form action="" method="post">
        <label for="comment">コメント：</label><input type="text" name="comment" id="comment"><br>
        <input type="submit" name="mode" value="add">
        <input type="submit" name="mode" value="save">
        <input type="submit" name="mode" value="restore">
        <input type="submit" name="mode" value="clear">
    </form>
</body>
</html>
