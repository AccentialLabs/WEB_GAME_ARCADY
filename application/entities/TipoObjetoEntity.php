<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoObjetoEntity
 *
 * @author user
 */
class TipoObjetoEntity {
    //put your code here
    
    private $id;
    private $titulo;
    private $datacriacao;
    private $status;
    
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDatacriacao() {
        return $this->datacriacao;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDatacriacao($datacriacao) {
        $this->datacriacao = $datacriacao;
    }

    public function setStatus($status) {
        $this->status = $status;
    }


}
