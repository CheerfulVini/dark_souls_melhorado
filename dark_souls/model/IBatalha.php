<?php

interface Batalha{
    public function atacar($distancia, $dano_bonus, $bonus_item, $vida, $CA);
    public function recuar($distancia);
    public function avancar($distancia);
}