<?php

include 'Vehiculo.php';
class Concesionario {
    public function mostrarVehiculo(Vehiculo $vehiculo) {
        echo $vehiculo->obtenerInformacion() . "\n";
    }
}