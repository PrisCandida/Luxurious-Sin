<?php

class Usuario{
    
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $sexo;
    private $senha;
    
    function getID() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCPF() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getSenha() {
        return $this->senha;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    
}

