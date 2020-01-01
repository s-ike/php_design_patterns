<?php
// require_once 'AbstractFactory/Cars/Factories/ImprezaFactory.php';
namespace AbstractFactory;

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
require_once 'config.php';

use AbstractFactory\Cars\Factories\ImprezaFactory;

$car_models = [
    1 => "Impreza",
];

$target = $car_models[1];

if ($target === 'Impreza') {
    $model = new ImprezaFactory();
} elseif (false/* 別の車種 */) {
    // 別の車種モデル
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract Factory</title>
</head>
<body>
    <h1>Abstract Factory</h1>
    <?php
    echo sprintf(
        "<h1>Car Model：%s</h1>",
        $target
    );
    $engine = $model->engine();
    $engine->add();

    $tire = $model->tire();
    $tire->add();

    $handle = $model->handle();
    $handle->add();
    ?>
</body>
</html>
