<?php

namespace Visitor;

use Visitor\Leaf\File;
use Visitor\Composite\Dir;
use Visitor\Visitors\DumpVisitor;
use Visitor\Visitors\CountVisitor;

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

// $root_dir->accept(new DumpVisitor());

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visitor</title>
</head>
<body>
    <h1>Visitor</h1>
    <h3>DumpVisitor</h3>
    <?php
    $root_dir->accept(new DumpVisitor());
    ?>
    <h3>CountVisitor</h3>
    <?php
    $count_cisitor = new CountVisitor();
    $root_dir->accept($count_cisitor);
    ?>
    Directories count: <?=$count_cisitor->getDirectoriesCnt();?><br>
    Files Count: <?=$count_cisitor->getFilesCnt();?>
</body>
</html>
