<?php
require_once __DIR__ . '/Car.php';
class Taxi extends Car
{

    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
    }

    public function pickUp($geton_nm)
    {
        $on_result = '';
        if ($geton_nm == 1 || $geton_nm == 2) {
            $on_result = "{$geton_nm}人乗車しました" . PHP_EOL;
            $this->passenger += $geton_nm;
        }
        return $on_result;
    }

    public function lower($getoff_nm)
    {
        $off_result = '';
        if ($this->passenger - $getoff_nm > 0) {
            $off_result = "{$getoff_nm}人降車しました" . PHP_EOL;
            $this->passenger -= $getoff_nm;
        } elseif ($this->passenger - $getoff_nm < 0) {
            $off_result = "{$getoff_nm}人は降車できません" . PHP_EOL;
        }

        //1つ目のelseifのが2つ目(最後)のelseifより上！理由は、1つ目は2つ目に包括されているから、
        //それでも違う処理を出力させたい場合は優先順位的に上に記載することでうまく処理されるから
        return $off_result;
    }
}
