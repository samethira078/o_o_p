<?php

include_once 'abstract/Pokemon.php';
include_once 'classes/Charmeleon.php';
include_once 'classes/Pikachu.php';
include_once 'classes/Attack.php';
include_once 'classes/Weakness.php';
include_once 'classes/Resistance.php';
include_once 'classes/EnergyType.php';
include_once 'static/Statistieken.php';
include_once 'classes/Health.php';

//PIKACHU
$attack = new Attack('Electric Ring', 50);
$attack2 = new Attack('Pika Punch', 20);
$attacks = [$attack, $attack2];
$weakness = new Weakness('Fire', 1.5);
$resistance = new Resistance('Fighting', 20);
$energyType = new EnergyType('Lightning');
$health = new Health(60);
$pikachu = new Pikachu('Pikachu',$attacks, $weakness, $resistance, $energyType, $health);

//CHARMELEON
$attack = new Attack('Flare', 30);
$attack2 = new Attack('Head Butt', 10);
$attacks = [$attack, $attack2];
$weakness = new Weakness('Water', 2);
$resistance = new Resistance('Lightsning', 10);
$energyType = new EnergyType('Fire');
$health = new Health(60);
$charmeleon = new Charmeleon('Charmeleon', $attacks, $weakness, $resistance, $energyType, $health);
echo "<pre>";
echo "Er zijn nu ". Statistieken::getPopulation()." levend!"."<br>";
print_r($pikachu->fight($charmeleon));
echo "Er zijn nu ". Statistieken::getPopulation()." levend!"."<br><br>";
echo "Eindresultaat:"."<br>";
echo "</pre>";




