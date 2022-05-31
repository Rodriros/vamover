<!--DESAFIO-->

<!--Criar uma fábrica de carro-->
<!--onde eu possa ter varios tipos de modelos de carro;-->
<!---->
<!--Voce deverá criar uma fabrica onde so deverá ter o armazenamento dos carros-->
<!--e listar os carros informando todas as caracteristicas.-->
<!--e adicionar no github.-->

<?php
abstract class Fabrica
{
    protected float $motor;
    protected string $cambio;
    protected string $cor;
    protected string $tipoCombustivel;
    protected string $nome;
    protected string $modelo;

    public function __construct(
        float $motor,
        string $cambio,
        string $cor,
        string $tipoCombustivel,
        string $nome,
        string $modelo
    ) {
        $this->motor = $motor;
        $this->cambio = $cambio;
        $this->cor = $cor;
        $this->tipoCombustivel = $tipoCombustivel;
        $this->nome = $nome;
        $this->modelo = $modelo;
    }


}