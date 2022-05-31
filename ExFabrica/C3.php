<?php
require 'CarroHatch.php';
class C3 extends CarroHatch
{
    public function __construct( string $cor)
    {
        parent::__construct(1.4, 'Manual', $cor, 'Flex', 'C3','');
    }

}