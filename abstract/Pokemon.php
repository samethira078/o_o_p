<?php

abstract class Pokemon
{
    protected $name;
    protected $attack;
    protected $weakness;
    protected $resistance;
    protected $energyType;
    protected $health;

    public function __construct($name, $attack, $weakness, $resistance, $energyType, $health){
        $this->name = $name;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->energyType = $energyType;
        $this->health = $health;
    }

    public function getAttack(){
        return $this->attack;
    }

    public function getWeakness(){
        return $this->weakness;
    }

    public function getResistance(){
        return $this->resistance;
    }

    public function getEnergyType(){
        return $this->energyType;
    }

    public function getHealth(){
        return $this->health;
    }

}