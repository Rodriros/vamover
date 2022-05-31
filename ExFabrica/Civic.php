<?php
require 'CarroSedan.php';
class Civic extends CarroSedan
{
    public function __construct(string $cor)
    {
        parent::__construct(2.0, 'cvt', $cor, 'diesel', 'civic', '');
    }

}

