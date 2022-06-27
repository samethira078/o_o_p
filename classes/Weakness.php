<?php
//Function to assign and summon weakness properties from the parent for each individual pokemon.
class Weakness
{
    private $name;
    private $amount;

    public function __construct($name, $amount){
        $this->name = $name;
        $this->amount = $amount;
    }

    public function getName(){
        return $this->name;
    }
    public function getAmount(){
        return $this->amount;
    }
}