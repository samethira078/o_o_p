<?php

class Attack
{
    private $attack;
    public function __construct($name, $attack){
        $this->attack = ["name" => $name, "attack" => $attack];
    }
    public function getAttack(){
        return $this->attack;
    }
}