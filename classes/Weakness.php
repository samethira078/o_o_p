<?php

class Weakness
{
    private $weakness;

    public function __construct($name, $amount){
        $this->weakness = ["EnergyType" => $name, "multiplier" => $amount];
    }

    public function getWeakness(){
        return $this->weakness;
    }
    public function setWeakness($weakness){
        return $this->weakness = $weakness;
    }
}