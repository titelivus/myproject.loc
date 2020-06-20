<?php

spl_autoload_register(function (string $classname) {
    require_once __DIR__ . '/../src/' . $classname . '.php';
});

$author = new \MyProject\Models\Users\User('Иван');
$article = new \MyProject\Models\Articles\Article('Заголовок', 'Текст', $author);
var_dump($article);