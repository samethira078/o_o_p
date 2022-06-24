<?php

class Charmeleon
{
    protected $name;
    protected $attack;
    protected $weakness;
    protected $resistance;
    protected $energyType;
    protected $health;

    public function __construct($name, $attack, $weakness, $resistance, $energyType, $health){
        $this->name = $name;
        $this->attack[] = $attack;
        $this->weakness[] = $weakness;
        $this->resistance[] = $resistance;
        $this->energyType = $energyType;
        $this->health = $health;
    }
}