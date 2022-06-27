<?php
//Child class of abstracted parent pokemon which includes each individual properties
class Pikachu extends Pokemon
{
    public function __construct($name, $attack, $weakness, $resistance, $energyType, $health)
    {
        $this->attack = $attack;
        $this->name = $name;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->energyType = $energyType;
        $this->health = $health;
        parent::__construct($name, $attack, $weakness, $resistance, $energyType, $health);
    }
}