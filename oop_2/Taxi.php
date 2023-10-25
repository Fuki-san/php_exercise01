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
        $on_number = '';
        if ($geton_nm == 1) {
            $on_number = "{$geton_nm}人乗車しました" . PHP_EOL;
            $this->passenger += $geton_nm;
            
        } elseif ($geton_nm == 2) {
            $on_number = "{$geton_nm}人乗車しました" . PHP_EOL;
            $this->passenger += $geton_nm;
        } 
        return $on_number;
    }

    public function lower($getoff_nm)
    {
        $off_number = '';
        if ($this->passenger > 0 && $getoff_nm == 1) {
            $off_number = "1人降車しました" . PHP_EOL;
            $this->passenger -= $getoff_nm;
        }elseif ($this->passenger < 2 && $getoff_nm == 2) {
            $off_number = "2人は降車できません" . PHP_EOL;
        } elseif ($getoff_nm == 2) {
            $off_number = "2人降車しました" . PHP_EOL;
            $this->passenger -= $getoff_nm;
        } 
        //1つ目のelseifのが2つ目(最後)のelseifより上！理由は、1つ目は2つ目に包括されているから、
        //それでも違う処理を出力させたい場合は優先順位的に上に記載することでうまく処理されるから
        return $off_number;
    }
}
 
