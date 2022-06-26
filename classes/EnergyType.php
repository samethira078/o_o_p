<?php

class EnergyType
{
    private $energyType;

    public function __construct($name){
        $this->energyType = $name;
    }
    public function getEnergyType(){
        return $this->energyType;
    }
}