<?php

namespace Mediator;

use Mediator\Form;
use Mediator\Input;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

if (isset($_POST)) {
    $form_mediator = new Form();
    foreach ($_POST as $key => $value) {
        $form_mediator->add(new Input($key, $value));
    }
    $msg = '';
    if ($form_mediator->send()) {
        $msg = 'OK';
    } else {
        $errors = $form_mediator->getErrors();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mediator</title>
</head>
<body>
    <h1>Mediator</h1>
    <?php
    if ($msg) {
        echo sprintf('<p>%s</p>', $msg);
    }
    if ($errors) {
        echo '<p style="color:red;">';
        foreach ($errors as $key => $value) {
            echo sprintf('%s: %s', $key, $value);
        }
        echo '</p>';
    }
    ?>
    <form action="" method="post">
        <h3>radio</h3>
        <input type="radio" name="radio" id="radio-MacBook" value="MacBook">
        <label for="radio-MacBook">MacBook</label>
        <input type="radio" name="radio" id="radio-iMac" value="iMac">
        <label for="radio-iMac">iMac</label>
        <input type="radio" name="radio" id="radio-iPhone" value="iPhone">
        <label for="radio-iPhone">iPhone</label><br>
        <br>
        <h3>select</h3>
        <label for="select-MacBook">Which MacBook:</label><br>
        <select id="select-MacBook" name="select-MacBook">
            <option value="">--Please choose your model--</option>
            <option value="13-inch">13-inch</option>
            <option value="15-inch">15-inch</option>
            <option value="others">others</option>
        </select><br>
        <label for="select-iMac">Which iMac:</label><br>
        <select id="select-iMac" name="select-iMac">
            <option value="">--Please choose your model--</option>
            <option value="21.5-inch">21.5-inch Retina 4K display</option>
            <option value="27-inch">27-inch Retina 5K display</option>
            <option value="others">others</option>
        </select><br>
        <label for="select-iPhone">Which iPhone:</label><br>
        <select id="select-iPhone" name="select-iPhone">
            <option value="">--Please choose your model--</option>
            <option value="iPhone11Pro">iPhone 11 Pro</option>
            <option value="iPhone11">iPhone 11</option>
            <option value="iPhoneXR">iPhone XR</option>
            <option value="iPhone8">iPhone 8</option>
            <option value="others">others</option>
        </select><br>
        <br>
        <input type="submit" value="Send"> 
    </form>
</body>
</html>
