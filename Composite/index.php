<?php

namespace Composite;

use Composite\Leaf\File;
use Composite\Composite\Dir;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$root_dir = new Dir('/');

$file_1 = new File('file_01.txt');
$root_dir->add($file_1);

$file_2 = new File('file_02.txt');
$root_dir->add($file_2);

$dir_1 = new Dir('dir01/');
$root_dir->add($dir_1);

$dir_2 = new Dir('dir02/');
$dir_2->add(new File('file_03.txt'));
$root_dir->add($dir_2);

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composite</title>
</head>
<body>
    <h1>Composite</h1>
    <h3><?=$root_dir->getName();?></h3>
    <?=$root_dir->display();?>
    <h3><?=$file_1->getName();?></h3>
    <?=$file_1->display();?>
    <h3><?=$dir_2->getName();?></h3>
    <?=$dir_2->display();?>
</body>
</html>
