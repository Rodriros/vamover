<?php

    include ('Interface1.php');

    class Teste implements Interface1 {
        public function printOnScreen($par)
        {
            echo $par;// TODO: Implement printOnScreen() method.
        }
    }

    $teste = new Teste;
    $teste -> printOnScreen('Olá mundo');

