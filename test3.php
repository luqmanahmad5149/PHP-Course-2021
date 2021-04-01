<?php

class Student {
    public $name;
    public $matricNo;
    private $age;
    public static $counter = 0;

    public function __construct($name, $matricNo) 
    {
        $this->name = $name;
        $this->matricNo = $matricNo;
        self::$counter++;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}

$s = new Student('Luqman', 'D001');
$s2 = new Student('Kamal', 'D002');

$s->setAge(20);

echo '<pre>';
var_dump($s);
echo '</pre>';

echo '<pre>';
var_dump($s2);
echo '</pre>';

echo Student::$counter;