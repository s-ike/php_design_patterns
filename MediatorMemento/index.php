<?php

namespace MediatorMemento;

use MediatorMemento\Form;
use MediatorMemento\Input;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$form_mediator = new Form();
if (isset($_POST)) {
    foreach ($_POST as $key => $value) {
        $form_mediator->add(new Input($key, $value));
    }
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
    <title>Memento</title>
</head>
<body>
    <h1>Memento</h1>
    <?php
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
