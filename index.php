<?php

include_once 'abstract/Pokemon.php';
include_once 'classes/Charmeleon.php';
include_once 'classes/Pikachu.php';
include_once 'classes/Attack.php';
include_once 'classes/Weakness.php';
include_once 'classes/Resistance.php';
include_once 'classes/EnergyType.php';
include_once 'classes/Battle.php';
include_once 'static/Statistieken.php';

//PIKACHU
$attack = new Attack('Electric Ring', 50);
$attack2 = new Attack('Pika Punch', 20);
$attacks = [$attack->getAttack(), $attack2->getAttack()];
$weakness = new Weakness('Fire', 1.5);
$resistance = new Resistance('Fighting', 20);
$energyType = new EnergyType('Lightning');
$pikachu = new Pikachu('Pikachu',$attacks, $weakness, $resistance, $energyType, 60);

//CHARMELEON
$attack = new Attack('Flare', 30);
$attack2 = new Attack('Head Butt', 10);
$attacks = [$attack->getAttack(), $attack2->getAttack()];
$weakness = new Weakness('Water', 2);
$resistance = new Resistance('Lightning', 10);
$energyType = new EnergyType('Fire');
$charmeleon = new Charmeleon('Pikachu', $attacks, $weakness, $resistance, $energyType, 60);

$battle = new Battle($pikachu, $charmeleon);
//print_r($battle->getHealth());

echo 'Er zijn nu '.Statistieken::getPopulation(). ' pokemon levend!';



