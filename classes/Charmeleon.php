<?php

class Charmeleon extends Pokemon
{
    public $name;
    public $attack;
    public $weakness;
    public $resistance;
    public $energyType;
    public $health;

    public function __construct($name, $attack, $weakness, $resistance, $energyType, $health){
        $this->name = $name;
        $this->attack[] = $attack;
        $this->weakness[] = $weakness;
        $this->resistance[] = $resistance;
        $this->energyType = $energyType;
        $this->health = $health;
    }
}