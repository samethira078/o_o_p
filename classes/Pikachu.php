<?php

class Pikachu extends Pokemon
{
    protected $name;
    protected $attack;
    protected $weakness;
    protected $resistance;
    protected $energyType;
    protected $health;

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