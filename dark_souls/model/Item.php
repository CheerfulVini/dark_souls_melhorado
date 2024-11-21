<?php

class Item{
    protected $nome;
    protected $raridade;
    protected $valor;
    protected $peso;
    protected $dano;
    protected $tipo;

    public function __construct($nome, $raridade, $valor, $peso, $dano, $tipo) {
        $this->nome = $nome;
        $this->raridade = $raridade;
        $this->valor = $valor;
        $this->peso = $peso;
        $this->dano = $dano;
        $this->tipo = $tipo;
    }

    public function __toString()
    {
        return "Nome: $this->nome | Raridade: $this->raridade | Valor: $this->valor | Peso: $this->peso";
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of raridade
     */
    public function getRaridade()
    {
        return $this->raridade;
    }

    /**
     * Set the value of raridade
     */
    public function setRaridade($raridade): self
    {
        $this->raridade = $raridade;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of dano
     */
    public function getDano()
    {
        return $this->dano;
    }

    /**
     * Set the value of dano
     */
    public function setDano($dano): self
    {
        $this->dano = $dano;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of dano
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}