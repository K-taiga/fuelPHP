<?php

class Controller_Sample extends Controller
{
    public function action_calc($a, $b)
    {
        // sample/calc/$a/$bのように$_GETで受け取れる
        $answer = $a * $b;
        print($answer);
    }

}
