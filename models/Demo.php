<?php


namespace app\models;


class Demo
{
    public $name = '孙桥';
    public $age;

    public function __construct($age = 0)
    {
        $this->age = $age;
    }

    public function demo()
    {
        echo '123';
        return $this->name;
    }
}