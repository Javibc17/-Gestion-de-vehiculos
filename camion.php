<?php

include 'Vehiculo.php';
class Camion extends Vehiculo {
    private float $capacidadCarga;

    public function __construct(string $marca, string $modelo, float $capacidadCarga, string $color = "Negro") {
        parent::__construct($marca, $modelo, $color);
        $this->capacidadCarga = $capacidadCarga;
    }

    public function mover() {
        echo "El camion se está moviendo.\n";
    }

    public function detener() {
        echo "El camion se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Capacidad de Carga: {$this->capacidadCarga} toneladas";
    }

    public function setCapacidadCarga(float $capacidadCarga): self {
        $this->capacidadCarga = $capacidadCarga;
        return $this;
    }

    public function getCapacidadCarga(): float {
        return $this->capacidadCarga;
    }
}