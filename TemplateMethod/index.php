<?php

namespace TemplateMethod;

use TemplateMethod\Templates\ListDisplay;
use TemplateMethod\Templates\TableDisplay;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$data = [
    'PHP',
    'Ruby',
    'Python'
];

$list = new ListDisplay($data);
$table = new TableDisplay($data);

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Method</title>
</head>
<body>
    <h1>Template Method</h1>
    <h3><?=get_class($list);?></h3>
    <?=$list->display();?>
    <h3><?=get_class($table);?></h3>
    <?=$table->display();?>
</body>
</html>
