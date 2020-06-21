<?php

/* Домашнее задание:
 * Создайте еще один экшн в контроллере – sayBye(string $name), который будет выводить «Пока, $name».
 * Добавьте для него роут /bye/$name и убедитесь, что всё работает.
 */

return [
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
    '~^bye/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayBye']
];