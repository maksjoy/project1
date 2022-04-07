<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//$email = 'some@gmail.com';
//var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));
/*
class Email
{
    private $email;


    public function  __construct($email)
    {

        $this->setEmail($email);
    }


    public function setEmail($email)
    {
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException($email);
        }

        $this->email = $email;
    }


    public function getEmail()
    {
        return $this->email;
    }
}

$email1 = new Email('email1@gmail.com');
$email2 = new Email('email2@gmail.com');


    var_dump($email1->getEmail(), $email2->getEmail());

*/
class Pen
{
    private $level =100;
    public function write($string)
    {
       $this->level = $this->level - mb_strlen($string);
       if ($this->level <= 0) {
           throw new Exception('kina ne budet');

       }
       return $string;
    }
}
$pen = new Pen();
echo $pen->write('World');