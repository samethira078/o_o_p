<?php

abstract class Pokemon
{
    protected $name;
    protected $attack;
    protected $weakness;
    protected $resistance;
    protected $energyType;
    protected $health;

    public function __construct($name, $attack, $weakness, $resistance, $energyType, $health){
        $this->name = $name;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->energyType = $energyType;
        $this->health = $health;
    }
//  FIGHT BATTLE
    public function fight($enemy){
//        Loop through battle
        while($this->health->getHealth() > 0 || $enemy->health->getHealth() > 0){
//            Health variable
            $amount = null;
//              Your attack
            echo $this->name." valt ".$enemy->name." aan met ".$this->attack[0]['name']. " en doet ";
//              Check if enemy has resistance, if so, less harsh attack
            if($this->energyType->getEnergyType() === "Lightning" && $enemy->resistance->getResistance()['EnergyType'] === "Lightning"){
                $amount = $this->attack[0]['attack']-$enemy->resistance->getResistance()['amount'];
            } else {
                $amount = $this->attack[0]['attack'];
            }
//            Update health
            $enemy->health->setHealth($amount);
            echo $amount.' damage'."<br>";
            echo $enemy->name." heeft nu ".$enemy->health->getHealth()." leven over"."<br>";
//              End battle if one enemy died
            if($enemy->health->getHealth() === 0){
                break;
            }
//          Enemy attack
            echo $enemy->name." valt ".$this->name." aan met ".$enemy->attack[0]['name']. " en doet ";
//              Check if yours has weakness to harsh attack
            if($this->health->getHealth() > 0 && $this->energyType->getEnergyType() === "Lightning" && $enemy->energyType->getEnergyType() === "Fire"){
                $amount = $enemy->attack[0]['attack'] * $this->weakness->getWeakness()['multiplier'];
            } else {
                $amount = $enemy->attack[0]['attack'];
            }
//            Update health
            $this->health->setHealth($amount);
            echo $amount.' damage'."<br>";
            echo $this->name." heeft nu ".$this->health->getHealth()." leven over"."<br>";
//          End if you died
            if($this->health->getHealth() === 0){
                break;
            }
        }
//        Change statics to one Pokemon alive
        Statistieken::setPopulation(1);
    }
//  AFTER BATTLE
    public function __destruct()
    {
        echo "<pre>";
//        RESULTS
        if($this->health->getHealth() > 0){
            echo $this->name." GEWONNEN";
        } else {
            echo $this->name." VERLOREN";
        }
        echo "</pre>";
    }

}