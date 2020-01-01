<?php
$title = 'Design Patterns';
$list = [
    'AbstractFactory',
    'Builder',
    'FactoryMethod',
    'Prototype',
    'Singleton',
    'Adapter',
    'Bridge',
    'Composite',
    'Decorator',
    'Facade',
    'Flyweight',
    'Proxy',
    'ChainOfResponsibility',
    'Command',
    'Interpreter',
    'Iterator',
    'IteratorUsingPhpSpl',
    'Mediator',
    'Memento',
    'MediatorMemento',
    'Observer',
    'MediatorMementoObserver',
    'State',
    'Strategy',
    'TemplateMethod',
    'Visitor',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design Patterns</title>
</head>
<body>
    <h1>Design Patterns</h1>
    <ul>
        <?php foreach ($list as $name) : ?>
        <li><a href="/<?=$name?>"><?=$name?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
