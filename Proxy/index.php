<?php

namespace Proxy;

use Proxy\Proxy\ProxyStore;
use Proxy\Items\ItemCategory;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

$store = new ProxyStore(new ItemCategory(rand(0, 3)));

// Show HTML //////////////////////////////////////
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proxy</title>
</head>
<body>
    <?=$store->getProductCategoryName()?>
    <?=$store->getProductCategoryList()?>
</body>
</html>
