<?php

require_once("Item.php");

class Material extends Item{
    private $quantidade;

    

    /**
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }
}