<?php

namespace Command;

use Command\Invoker\Queue;
use Command\Receiver\File;
use Command\CopyCommand;
use Command\TouchCommand;
use Command\CompressCommand;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$queue = new Queue();
$file = new File('NewFile.txt');
$queue->addCommand(new TouchCommand($file));
$queue->addCommand(new CompressCommand($file));
$queue->addCommand(new CopyCommand($file));
$file2 = new File('OtherFile.txt');
$queue->addCommand(new TouchCommand($file2));

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Command</title>
</head>
<body>
    <h1>Command</h1>
    <h3>Current queue</h3>
    <p>
    <?php
    foreach ($queue->getQueue() as $key => $command) {
        $key++;
        echo "$key: $command<br>";
    }
    ?>

    <h3>Undo</h3>
    <?php
    $queue->undo();
    ?>
    </p>

    <h3>Execute commands</h3>
    <p>
    <?php
    foreach ($queue->run() as $key => $command) {
        $key++;
        echo "$key: $command<br>";
    }
    ?>
    </p>
</body>
</html>
