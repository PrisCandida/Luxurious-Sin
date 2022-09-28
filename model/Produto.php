<?php

class Produto{
    
    private $id;
    private $nome;
    private $valor;
    private $marca;
    private $imagem;
    
    function getID() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getValor() {
        return $this->valor;
    }

    function getMarca() {
        return $this->marca;
    }

    function getImagem() {
        return $this->imagem;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }
    
}

