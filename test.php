<?php

/* Домашнее задание:
 *
 * 1. Познакомьтесь самостоятельно с функцией get_class().
 *
 * 2. Дополните информацию об объекте, для которого считается площадь – пишите что это объект такого-то класса.
 *
 * 3. Для объектов, которые не реализуют интерфейс CalculateSquare пишите:
 *    Объект класса ТУТ_НАЗВАНИЕ_КЛАССА не реализует интерфейс CalculateSquare.
 */

interface CalculateSquare
{
    public function calculateSquare(): float;
}

class Rectangle implements CalculateSquare
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateSquare(): float
    {
        return $this->x * $this->y;
    }
}

class Square
{
    private $x;

    public function __construct(float $x)
    {
        $this->x = $x;
    }

    public function calculateSquare(): float
    {
        return $this->x ** 2;
    }
}

class Circle implements CalculateSquare
{
    const PI = 3.1416;

    private $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function calculateSquare(): float
    {
        return self::PI * ($this->r **2);
    }
}

$objects = [
    new Square(5),
    new Rectangle(2, 4),
    new Circle(5)
];

// get_class — Возвращает имя класса, к которому принадлежит объект
// get_class ([ object $object ] ) : string

foreach($objects as $object) {

    echo 'Объект класса "' . get_class($object) . '" ';

    if ($object instanceof CalculateSquare) {
        echo 'реализует интерфейс CalculateSquare. Площадь: ' . $object->calculateSquare();
    } else {
        echo 'не реализует интерфейс CalculateSquare.';
    }

    echo '<br>';
}