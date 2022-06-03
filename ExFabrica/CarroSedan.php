<?php
require 'Fabrica.php';
abstract class CarroSedan extends Fabrica {

    protected function __construct(float $motor, string $cambio, string $cor, string $tipoCombustivel, string $nome, string $modelo)
    {
        parent::__construct($motor, $cambio, $cor, $tipoCombustivel, $nome, $modelo = 'Sedan');
    }

}