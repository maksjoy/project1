<?php
class Color
{
    private $red;
    private $green;
    private $blue;


    public function __construct($red, $green, $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }


    public function getRed()
    {
        return $this->red;
    }


    private function setRed($red)
    {
        $this->check($red);
        $this->red = $red;
    }


    public function getGreen()
    {
        return $this->green;
    }


    private function setGreen($green)
    {
        $this->check($green);
        $this->green = $green;
    }


    public function getBlue()
    {
        return $this->blue;
    }


    private function setBlue($blue)
    {
        $this->check($blue);
        $this->blue = $blue;
    }

    private function check($value)
    {
        if ($value < 0 || $value > 255) {
            throw new Exception('Invalid value');
        }
    }
    public function equals(Color $color)
    {
        $result = true;


        if ($this->red != $color->getRed())
        {
            $result = false;
        }
        else if ($this->green != $color->getGreen())
        {
            $result = false;
        }
        else if ($this->blue != $color->getBlue())
        {
            $result = false;
        }


        return $result;

    }
}

$color = new Color(155,27,55);
$color1 = new Color(0,0,0);
$color2 = new Color(0,0,0);
$result = $color1->equals($color2); //bool
    var_dump($result);




?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(<?= $color->getRed()?>, <?=$color->getGreen()?>, <?= $color->getBlue()?>);
        }
    </style>
</head>
<body>

</body>
</html>
