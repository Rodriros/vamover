<?php
require 'Civic.php';
require 'C3.php';
require 'Versa.php';
require 'Onix.php';
$civic[1] = new Civic ('azul');
$c3[2] = new C3 ('preto');
$versa[3] = new Versa('Vermelho');
$onix[4] = new Onix('Prata');
$carros = [$civic,$c3,$versa,$onix];

foreach ($carros as $carro){
        print_r($carro);
        echo '<hr>';
}
