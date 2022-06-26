<?php

class Statistieken
{
    private static $alive= 2;
    public static function getPopulation(){
        return self::$alive;
    }
    public static function setPopulation($amount){
        return self::$alive = $amount;
    }
}