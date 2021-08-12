<?php
include 'autoloader.php';
$factory = new AnimalFactory();
$farm = new Farm();
$factory->createAnimal($farm, 'Chicken', 15);
$factory->createAnimal($farm, 'Cow', 7);
$cart = $farm->collectAll();
foreach ($cart as $key => $item) {
    echo $key . ': ' . $item['count'] . ' ' . $item['ending'] . PHP_EOL;
}