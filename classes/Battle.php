<?php

class Battle
{
    protected $pikachu;
    protected $charmeleon;

    public function __construct($pikachu, $charmeleon){
        $this->pikachu = $pikachu;
        $this->charmeleon = $charmeleon;
    }
    public function getHealth(){
        return $this->pikachu;
    }
}