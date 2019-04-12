<?php
namespace App;
require "../vendor/autoload.php";

class Calculate
{
    protected $num1;
    protected $num2;
    protected $num3;

    public function getNum1()
    {
        return $this->num1;
    }

    public function setNum1($num1)
    {
        $this->num1 = $num1;
    }

    public function getNum2()
    {
        return $this->num2;
    }

    public function setNum2($num2)
    {
        $this->num2 = $num2;
    }

    public function getNum3()
    {
        return $this->num3;
    }

    public function setNum3($num3)
    {
        $this->num3 = $num3;
    }


    public function add($num1, $num2 = 0, $num3 = 0)
    {
        if ($num1 === "") {
            $num1 = 0;
        } elseif ($num2 === "") {
            $num2 = 0;
        } elseif ($num3 === "") {
            $num3 = 0;
        }
        $sum = $num1 + $num2 + $num3;
        var_dump(strval($sum));
        return strval($sum);
    }
}