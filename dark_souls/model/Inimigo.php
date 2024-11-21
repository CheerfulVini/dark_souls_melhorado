<?php

class Inimigo{
    protected $bonus_ataque;
    protected $vida_max;
    public $vida;
    protected $CA;


    public function __construct(
        $bonus_ataque = 0,
        $vida_max = 20,
        $CA = 15
    ) {
        $this->$bonus_ataque = $bonus_ataque;

        $this->vida_max = $vida_max;
        $this->vida = $vida_max; // Vida inicial é igual à vida máxima.
        $this->CA = $CA;
    }

    /**
     * Get the value of for
     */
    public function getBonusAtaque()
    {
        return $this->bonus_ataque;
    }

    /**
     * Set the value of for
     */
    public function setBonusAtaque($bonus_ataque): self
    {
        $this->$bonus_ataque = $bonus_ataque;

        return $this;
    }

   
    public function getVidaMax()
    {
        return $this->vida_max;
    }

    /**
     * Set the value of vida_max
     */
    public function setVidaMax($vida_max): self
    {
        $this->vida_max = $vida_max;

        return $this;
    }

    /**
     * Get the value of vida
     */
    public function getVida()
    {
        return $this->vida;
    }

    /**
     * Set the value of vida
     */
    public function setVida($vida): self
    {
        $this->vida = $vida;

        return $this;
    }

    /**
     * Get the value of CA
     */
    public function getCA()
    {
        return $this->CA;
    }

    /**
     * Set the value of CA
     */
    public function setCA($CA): self
    {
        $this->CA = $CA;

        return $this;
    }
}