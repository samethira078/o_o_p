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

    public function fight($enemy){
        while($this->health->getHealth() > 0 || $enemy->health->getHealth() > 0){
            $amount = null;

            echo $this->name." valt ".$enemy->name." aan met ".$this->attack[0]['name']. " en doet ";

            if($this->energyType->getEnergyType() === "Lightning" && $enemy->resistance->getResistance()['EnergyType'] === "Lightning"){
                $amount = $this->attack[0]['attack']-$enemy->resistance->getResistance()['amount'];
            } else {
                $amount = $this->attack[0]['attack'];
            }
            $enemy->health->setHealth($amount);
            echo $amount.' damage'."<br>";
            echo $enemy->name." heeft nu ".$enemy->health->getHealth()." leven over"."<br>";

            if($enemy->health->getHealth() === 0){
                break;
            }

            echo $enemy->name." valt ".$this->name." aan met ".$enemy->attack[0]['name']. " en doet ";

            if($this->health->getHealth() > 0 && $this->energyType->getEnergyType() === "Lightning" && $enemy->energyType->getEnergyType() === "Fire"){
                $amount = $enemy->attack[0]['attack'] * $this->weakness->getWeakness()['multiplier'];
            } else {
                $amount = $enemy->attack[0]['attack'];
            }
            $this->health->setHealth($amount);
            echo $amount.' damage'."<br>";
            echo $this->name." heeft nu ".$this->health->getHealth()." leven over"."<br>";

            if($this->health->getHealth() === 0){
                break;
            }
        }
        Statistieken::setPopulation(1);
    }

    public function __destruct()
    {
        echo "<pre>";
        if($this->health->getHealth() > 0){
            echo $this->name." GEWONNEN";
        } else {
            echo $this->name." VERLOREN";
        }
        echo "</pre>";
    }

}