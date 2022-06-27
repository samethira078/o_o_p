<?php
//Child class of abstracted parent pokemon which includes each individual properties
class Charmeleon extends Pokemon
{
    public function __construct($name, $attack, $weakness, $resistance, $energyType, $health){
        $this->name = $name;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->energyType = $energyType;
        $this->health = $health;
        parent::__construct($name, $attack, $weakness, $resistance, $energyType, $health);
    }

}