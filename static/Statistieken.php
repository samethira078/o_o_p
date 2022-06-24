<?php

class Statistieken
{
    protected static $alive= 0;

    public static function getPopulation(){
        return self::$alive;
    }
}