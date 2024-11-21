<?php

require_once("model/Item.php");

$espada = new Item("Espada", 1, 50, 3, 6, "Arma");
$cajado_simples = new CajadoSimples("Cajado Simples", 1, 50, 2, 6, "Arma");
$adaga = new Item("Adaga", 1, 50, 1.5, 6, "Arma");
$chave = new Item("Chave da sela", 1, 0, 0, 0, "Chave");
$frasco_estus = new Item("Frasco de Estus", 1, "0", 0, 0, "Consumivel");