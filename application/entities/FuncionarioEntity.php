<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CidadeEntity
 *
 * @author Raphael Pizzo
 */
class FuncionarioEntity {
    //put your code here
    
    private $id;
    private $email;
    private $senha;
    private $nome;
    private $datanascimento;
    private $datacadastro;
    private $cargo;
    private $departamento;
    private $unidade;
    private $cidade;
    private $perfil_id;
    private $endereco;
    private $pais;
    private $estado;
    private $status;
    private $telefone;
    private $ramal;
    private $celular;
    private $sexo;
    private $urlfoto;
    private $empresa_id;
    
    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getDatanascimento() {
        return $this->datanascimento;
    }

    function getDatacadastro() {
        return $this->datacadastro;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getDepartamento() {
        return $this->departamento;
    }

    function getUnidade() {
        return $this->unidade;
    }

    function getCidade_id() {
        return $this->cidade;
    }

    function getPerfil_id() {
        return $this->perfil_id;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getPais() {
        return $this->pais;
    }

    function getEstado() {
        return $this->estado;
    }

    function getStatus() {
        return $this->status;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getRamal() {
        return $this->ramal;
    }

    function getCelular() {
        return $this->celular;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getUrlfoto() {
        return $this->urlfoto;
    }

    function getEmpresa_id() {
        return $this->empresa_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDatanascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
    }

    function setDatacadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
    }

    function setCargo($cargo) {
        $this->cargo_id = $cargo;
    }

    function setDepartamento($departamento) {
        $this->departamento_id = $departamento;
    }

    function setUnidade($unidade) {
        $this->unidade_id = $unidade;
    }

    function setCidade($cidade) {
        $this->cidade= $cidade;
    }

    function setPerfil_id($perfil_id) {
        $this->perfil_id = $perfil_id;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setRamal($ramal) {
        $this->ramal = $ramal;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setUrlfoto($urlfoto) {
        $this->urlfoto = $urlfoto;
    }

    function setEmpresa_id($empresa_id) {
        $this->empresa_id = $empresa_id;
    }


}