<?php

class Battle
{
    protected $pikachu;
    protected $charmeleon;
    protected $result;

    public function checkPowers(){
        return $this->pikachu->weakness;
    }

    public function alivePokemon($first, $second){
        if($first > 0 && $second > 0){
            Statistieken::$alive = 2;
        } else {
            Statistieken::$alive = 1;
        }
    }
    public function fight(){

    }
}