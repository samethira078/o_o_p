<?php
//Child class of abstracted parent pokemon which includes each individual properties
class Pikachu extends Pokemon
{
    public function __construct($name, $attack, $weakness, $resistance, $energyType, $health)
    {
        parent::__construct($name, $attack, $weakness, $resistance, $energyType, $health);
    }
}