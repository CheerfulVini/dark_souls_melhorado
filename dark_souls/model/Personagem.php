<?php

require_once("IBatalha.php");

class Personagem implements Batalha{
    public $nivel;

    private $bonus_for;
    private $bonus_dex;
    private $bonus_con;
    private $bonus_int;
    private $bonus_sab;
    private $bonus_car;

    private $PO_inicial;

    private $vida_max;

    public $almas;

    public $vida;

    public array $itens;
    public $item_equipado;

    public function avancar($distancia){
        $distancia = $distancia - ($this->bonus_dex + 1);
    }

    public function recuar($distancia){
        $distancia = $distancia + ($this->bonus_dex + 1);
    }

    public function atacar($distancia, $dano_bonus, $bonus_item, $vida, $CA){
        if($distancia <= 1){
            $resultado = rand(1, 20);
            if($resultado == 1 or $resultado == 20){
                if($resultado == 1){
                    print("Seu resultado foi 1\n");
                    sleep(3);
                    print("Você falhou miseravelmente...\n");
                    return 0;
                }else{
                    print("Seu resultado foi 20\n");
                    sleep(3);
                    $dano_dado = ($dano_bonus + $bonus_item) * 2;
                    print("Você acerta em cheio seu ataque, causando $dano_dado de dano.");
                    return $dano_dado;
                }
            }else{
                $resultado_total = $resultado + $bonus_item;
                if($resultado + $bonus_item >= $CA){
                    print("Seu resultado foi $resultado_total.\n");
                    sleep(3);
                    $dano_dado = rand(3, $dano_bonus + $bonus_item);
                    print("Você deu $dano_dado de dano");
                    return $dano_dado;
                }else{
                    print("Seu resultado foi $resultado_total.\n");
                    sleep(3);
                    print("Você errou.");
                    return 0;
                }
            }
        }else{
            print("O seu inimigo está muito longe.");
        }
    }

    public function __construct(
        $bonus_for = 0,
        $bonus_dex = 0,
        $bonus_con = 0,
        $bonus_int = 0,
        $bonus_sab = 0,
        $bonus_car = 0,
        $PO_inicial = 0,
        $vida_max = 10
    ) {

        $this->bonus_for = $bonus_for;
        $this->bonus_dex = $bonus_dex;
        $this->bonus_con = $bonus_con;
        $this->bonus_int = $bonus_int;
        $this->bonus_sab = $bonus_sab;
        $this->bonus_car = $bonus_car;

        $this->PO_inicial = $PO_inicial;

        $this->vida_max = $vida_max;
        $this->vida = $vida_max; // Vida começa com o valor máximo por padrão.
        $this->itens = []; // Inicializa o inventário como um array vazio.
    }

    public function listarItens(){
        $i=0;

        foreach ($this->itens as $item) {
            print("$i. " . $item . "\n");
            $i++;
        }
    }

    
    /**
     * Get the value of bonus_for
     */
    public function getBonusFor()
    {
        return $this->bonus_for;
    }

    /**
     * Set the value of bonus_for
     */
    public function setBonusFor($bonus_for): self
    {
        $this->bonus_for = $bonus_for;

        return $this;
    }

    /**
     * Get the value of bonus_dex
     */
    public function getBonusDex()
    {
        return $this->bonus_dex;
    }

    /**
     * Set the value of bonus_dex
     */
    public function setBonusDex($bonus_dex): self
    {
        $this->bonus_dex = $bonus_dex;

        return $this;
    }

    /**
     * Get the value of bonus_con
     */
    public function getBonusCon()
    {
        return $this->bonus_con;
    }

    /**
     * Set the value of bonus_con
     */
    public function setBonusCon($bonus_con): self
    {
        $this->bonus_con = $bonus_con;

        return $this;
    }

    /**
     * Get the value of bonus_int
     */
    public function getBonusInt()
    {
        return $this->bonus_int;
    }

    /**
     * Set the value of bonus_int
     */
    public function setBonusInt($bonus_int): self
    {
        $this->bonus_int = $bonus_int;

        return $this;
    }

    /**
     * Get the value of bonus_sab
     */
    public function getBonusSab()
    {
        return $this->bonus_sab;
    }

    /**
     * Set the value of bonus_sab
     */
    public function setBonusSab($bonus_sab): self
    {
        $this->bonus_sab = $bonus_sab;

        return $this;
    }

    /**
     * Get the value of bonus_car
     */
    public function getBonusCar()
    {
        return $this->bonus_car;
    }

    /**
     * Set the value of bonus_car
     */
    public function setBonusCar($bonus_car): self
    {
        $this->bonus_car = $bonus_car;

        return $this;
    }

    /**
     * Get the value of PO_inicial
     */
    public function getPOInicial()
    {
        return $this->PO_inicial;
    }

    /**
     * Set the value of PO_inicial
     */
    public function setPOInicial($PO_inicial): self
    {
        $this->PO_inicial = $PO_inicial;

        return $this;
    }

    /**
     * Get the value of vida_max
     */
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
     * Get the value of itens
     */
    public function getItens(): array
    {
        return $this->itens;
    }

    /**
     * Set the value of itens
     */
    public function setItens(array $itens): self
    {
        $this->itens = $itens;

        return $this;
    }
};