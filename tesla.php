<?php

include 'Vehiculo.php';
include 'VehiculoElectrico.php';

class Tesla extends Vehiculo implements VehiculoElectrico {
    private int $nivelBateria;

    public function __construct(string $marca, string $modelo, string $color = "Negro") {
        parent::__construct($marca, $modelo, $color);
        $this->nivelBateria = 100; // Batería llena al inicio
    }

    public function mover() {
        echo "El Tesla se esta moviendo.\n";
    }

    public function detener() {
        echo "El Tesla se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Nivel de Bateria: {$this->nivelBateria}%";
    }

    public function cargarBateria() {
        $this->nivelBateria = 100;
        echo "Bateria cargada al 100%.\n";
    }

    public function estadoBateria(): string {
        return "Nivel de bateria: {$this->nivelBateria}%";
    }
}