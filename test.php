<?php

class Human
{
    private static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}

for ($i = rand(3, 15); $i != 0; $i--) {
    new Human();
}

echo Human::getCount();