<?php

/* Домашнее задание:
 * Создайте еще один экшн в контроллере – sayBye(string $name), который будет выводить «Пока, $name».
 * Добавьте для него роут /bye/$name и убедитесь, что всё работает.
 */

return [
    '~^articles/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main']
];