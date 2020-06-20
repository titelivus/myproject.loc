<?php

spl_autoload_register(function (string $classname) {
    require_once __DIR__ . '/../src/' . $classname . '.php';
});

$controller = new \MyProject\Controllers\MainController();

if (!empty($_GET['name'])) {
    $controller->sayHello($_GET['name']);
} else {
    $controller->main();
}

