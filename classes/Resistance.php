<?php

class Resistance
{
    private $resistance;

    public function __construct($name, $amount){
        $this->resistance = ["EnergyType" => $name, "amount" => $amount];
    }
    public function getResistance(){
        return $this->resistance;
    }
}