<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipesEntity
 *
 * @author Raphael Pizzo
 */
class EquipesEntity {
    private $id;
    private $cargo_id;
    private $departamento_id;
    private $unidade_id;
    private $cidade_id;
    private $estado_id;
    private $pais_id;
    private $aleatorio;
    private $equipeqtd;
    private $equipeprefixo;
    private $manual;
    private $equipenome;
    private $temaequipe;
    private $cadastro;
    
    function getId() {
        return $this->id;
    }

    function getCargo_id() {
        return $this->cargo_id;
    }

    function getDepartamento_id() {
        return $this->departamento_id;
    }

    function getUnidade_id() {
        return $this->unidade_id;
    }

    function getCidade_id() {
        return $this->cidade_id;
    }

    function getEstado_id() {
        return $this->estado_id;
    }

    function getPais_id() {
        return $this->pais_id;
    }

    function getAleatorio() {
        return $this->aleatorio;
    }

    function getEquipeqtd() {
        return $this->equipeqtd;
    }

    function getEquipeprefixo() {
        return $this->equipeprefixo;
    }

    function getManual() {
        return $this->manual;
    }

    function getEquipenome() {
        return $this->equipenome;
    }

    function getTemaequipe() {
        return $this->temaequipe;
    }

    function getCadastro() {
        return $this->cadastro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCargo_id($cargo_id) {
        $this->cargo_id = $cargo_id;
    }

    function setDepartamento_id($departamento_id) {
        $this->departamento_id = $departamento_id;
    }

    function setUnidade_id($unidade_id) {
        $this->unidade_id = $unidade_id;
    }

    function setCidade_id($cidade_id) {
        $this->cidade_id = $cidade_id;
    }

    function setEstado_id($estado_id) {
        $this->estado_id = $estado_id;
    }

    function setPais_id($pais_id) {
        $this->pais_id = $pais_id;
    }

    function setAleatorio($aleatorio) {
        $this->aleatorio = $aleatorio;
    }

    function setEquipeqtd($equipeqtd) {
        $this->equipeqtd = $equipeqtd;
    }

    function setEquipeprefixo($equipeprefixo) {
        $this->equipeprefixo = $equipeprefixo;
    }

    function setManual($manual) {
        $this->manual = $manual;
    }

    function setEquipenome($equipenome) {
        $this->equipenome = $equipenome;
    }

    function setTemaequipe($temaequipe) {
        $this->temaequipe = $temaequipe;
    }

    function setCadastro($cadastro) {
        $this->cadastro = $cadastro;
    }


}