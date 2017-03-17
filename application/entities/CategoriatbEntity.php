<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriatbEntity
 *
 * @author Raphael Pizzo
 */
class CategoriatbEntity {
    //put your code here
    private $id;
    private $categoriaobjetos;
    private $status;
    
    function getId() {
        return $this->id;
    }

    function getCategoriaobjetos() {
        return $this->categoriaobjetos;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCategoriaobjetos($categoriaobjetos) {
        $this->categoriaobjetos = $categoriaobjetos;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}