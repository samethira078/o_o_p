<?php
//Function to assign and health properties from the parent for each individual pokemon.
class Health
{
    private $health;

    public function __construct($amount){
        $this->health = $amount;
    }
    public function getHealth(){
        return $this->health;
    }
    public function setHealth($health){
        if($this->health - $health < 0){
            return $this->health = 0;
        }
        return $this->health -= $health;
    }
}