<?php

include 'Coche.php';
include 'Moto.php';
include 'Camion.php';
include 'Tesla.php';
include 'Bicicleta.php';
include 'Concesionario.php';

$concesionario = new Concesionario();

$coche = new Coche("Toyota", "Corolla", 4);
$moto = new Moto("Yamaha", "MT-07", 689);
$camion = new Camion("Mercedes", "Actros", 18.0);
$tesla = new Tesla("Tesla", "Model S");

$concesionario->mostrarVehiculo($coche);
$concesionario->mostrarVehiculo($moto);
$concesionario->mostrarVehiculo($camion);
$concesionario->mostrarVehiculo($tesla);

$coche->setNumeroPuertas(2)->setNumeroPuertas(4);
$concesionario->mostrarVehiculo($coche); 
echo "Despues de modificar el numero de puertas:\n";
$concesionario->mostrarVehiculo($coche);

$bicicleta = new Bicicleta();
$bicicleta->pedalear();