<?php

require_once("Item.php");

class Equipamento extends Item{
    private $bonus_CA;
    private $bonus_dano;
    private $tipo_dano;

    

    /**
     * Get the value of bonus_CA
     */
    public function getBonusCA()
    {
        return $this->bonus_CA;
    }

    /**
     * Set the value of bonus_CA
     */
    public function setBonusCA($bonus_CA): self
    {
        $this->bonus_CA = $bonus_CA;

        return $this;
    }

    /**
     * Get the value of bonus_dano
     */
    public function getBonusDano()
    {
        return $this->bonus_dano;
    }

    /**
     * Set the value of bonus_dano
     */
    public function setBonusDano($bonus_dano): self
    {
        $this->bonus_dano = $bonus_dano;

        return $this;
    }

    /**
     * Get the value of tipo_dano
     */
    public function getTipoDano()
    {
        return $this->tipo_dano;
    }

    /**
     * Set the value of tipo_dano
     */
    public function setTipoDano($tipo_dano): self
    {
        $this->tipo_dano = $tipo_dano;

        return $this;
    }
}