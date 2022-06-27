<?php
//Function to assign and summon energyType properties from the parent for each individual pokemon.
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