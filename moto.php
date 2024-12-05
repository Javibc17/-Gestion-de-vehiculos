<?php

include 'Vehiculo.php';
class Moto extends Vehiculo {
    private int $cilindrada;

    public function __construct(string $marca, string $modelo, int $cilindrada, string $color = "Negro") {
        parent::__construct($marca, $modelo, $color);
        $this->cilindrada = $cilindrada;
    }

    public function mover() {
        echo "La moto se esta moviendo.\n";
    }

    public function detener() {
        echo "La moto se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Cilindrada: {$this->cilindrada}cc";
    }

    public function setCilindrada(int $cilindrada): self {
        $this->cilindrada = $cilindrada;
        return $this;
    }

    public function getCilindrada(): int {
        return $this->cilindrada;
    }
}