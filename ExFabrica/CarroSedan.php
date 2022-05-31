<?php
require 'Fabrica.php';
abstract class CarroSedan extends Fabrica {

    protected function __construct(float $motor, string $cambio, string $cor, string $tipoCombustivel, string $nome, string $modelo)
    {
        parent::__construct($motor, $cambio, $cor, $tipoCombustivel, $nome, $modelo = 'Sedan');
    }

//   //
//    /**
//     * @return float
//     */
//    public function getMotor(): float
//    {
//        return $this->motor;
//    }
//
//    /**
//     * @param float $motor
//     */
//    public function setMotor(float $motor): void
//    {
//        $this->motor = $motor;
//    }
//
//    /**
//     * @return string
//     */
//    public function getCambio(): string
//    {
//        return $this->cambio;
//    }
//
//    /**
//     * @param string $cambio
//     */
//    public function setCambio(string $cambio): void
//    {
//        $this->cambio = $cambio;
//    }
//
//    /**
//     * @return string
//     */
//    public function getCor(): string
//    {
//        return $this->cor;
//    }
//
//    /**
//     * @param string $cor
//     */
//    public function setCor(string $cor): void
//    {
//        $this->cor = $cor;
//    }
//
//    /**
//     * @return string
//     */
//    public function getTipoCombustivel(): string
//    {
//        return $this->tipoCombustivel;
//    }
//
//    /**
//     * @param string $tipoCombustivel
//     */
//    public function setTipoCombustivel(string $tipoCombustivel): void
//    {
//        $this->tipoCombustivel = $tipoCombustivel;
//    }
//
//    /**
//     * @return string
//     */
//    public function getNome(): string
//    {
//        return $this->nome;
//    }
//
//

}