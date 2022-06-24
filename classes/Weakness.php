<?php

class Weakness
{
    private $weakness;

    public function __construct($name, $amount){
        $this->weakness = ["EnergyType" => $name, "multiplier" => $amount];
    }
}