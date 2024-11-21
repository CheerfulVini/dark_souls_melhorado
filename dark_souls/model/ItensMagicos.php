<?php

require_once("Magico.php");
require_once("Item.php");

class CajadoSimples extends Magico{
    public function dano($atributo){
        return (rand(1, $this->dano) + $atributo) + 2;
    }
}