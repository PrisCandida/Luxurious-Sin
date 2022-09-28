<?php

class Avaliacao{
    
    private $id_feedback;
    private $id_cliente;
    private $id_produto;
    private $pergunta1;
    private $pergunta2;
    private $pergunta3;
    private $estrela;
    private $descricao;
    
    function getIDF() {
        return $this->idf;
    }

    function getIDC() {
        return $this->idc;
    }

    function getIDP() {
        return $this->idp;
    }

    function getP1() {
        return $this->;
    }

    function getP2() {
        return $this->telefone;
    }

    function getP3() {
        return $this->sexo;
    }

    function getEstrela() {
        return $this->senha;
    }

    function getDescricao() {
        return $this->senha;
    }

    function setIDF($id) {
        $this->id = $id;
    }

    function setIDC($nome) {
        $this->nome = $nome;
    }

    function setIDP($cpf) {
        $this->cpf = $cpf;
    }

    function setP1($email) {
        $this->email = $email;
    }

    function setP2($telefone) {
        $this->telefone = $telefone;
    }

    function setP3($sexo) {
        $this->sexo = $sexo;
    }

    function setEstrela($senha) {
        $this->senha = $senha;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
}

