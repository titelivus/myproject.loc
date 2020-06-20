<?php

/* Домашнее задание:
 *
 * 1. Создайте ещё один класс, являющийся наследником класса Lesson - PaidLesson (платный урок).
 *
 * 2. Объявите в нем свойство price (цена), а также геттеры и сеттеры для этого свойства.
 *    Добавьте в конструкторе параметр, через который это свойство будет устанавливаться при создании объекта.
 *
 * 3. Создайте объект этого класса со следующими свойствами:
 *          заголовок: Урок о наследовании в PHP
 *          текст: Лол, кек, чебурек
 *          домашка: Ложитесь спать, утро вечера мудренее
 *          цена: 99.90
 *
 * 4. Выведите этот объект с помощью var_dump()
 */

class Post
{
    private $title;
    private $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }
}

class Lesson extends Post
{
    private $homework;

    public function __construct(string $title, string $text, string $homework)
    {
        parent::__construct($title, $text);
        $this->homework = $homework;

    }

    public function getHomework()
    {
        return $this->homework;
    }

    public function setHomework(string $homework)
    {
        $this->homework = $homework;
    }
}

class PaidLesson extends Lesson
{
    private $price;

    public function __construct(string $title, string $text, string $homework, float $price)
    {
        parent::__construct($title, $text, $homework);
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}

$lesson1 = new PaidLesson(
    'Урок о наследовании в PHP',
    'Лол, кек, чебурек',
    'Ложитесь спать, утро вечера мудренее',
    99.90
);

var_dump($lesson1);