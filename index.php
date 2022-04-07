<?php
$g = 40;
$dt = new DateTime();
// int null float string object
class Example
{
    public $a;

    public static $b;

    public function  __construct($a)
    {
        $this->a = $a;
    }


    public static function getA($a)
    {

    }


    public static function setB($b)
    {

    }
}
Example::setB(10);

$ex1 = new Example(10);

$ex1::$b = 30;

$ex2 = new Example(20);

$ex2::$b = 40;

$ex3 = new Example(100);

echo $ex3::$b;


