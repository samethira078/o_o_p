<?php

//Function to assign and summon attack properties from the parent for each individual pokemon.
class Attack
{
    private $name;
    private $attack;

    public function __construct($name, $attack){
        $this->name = $name;
        $this->attack = $attack;
    }
    public function getAttack(){
        return $this->attack;
    }
    public function getName(){
        return $this->name;
    }
    public function setAttack(){
        return $this->attack;
    }
}