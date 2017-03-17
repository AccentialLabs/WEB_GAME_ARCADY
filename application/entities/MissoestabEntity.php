<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MissoestabEntity
 *
 * @author Raphael Pizzo
 */
class MissoestabEntity {
    //put your code here
    
    private $id;
    private $tipomissoes;
    private $status;
   
    function getId() {
        return $this->id;
    }

    function getTipomissoes() {
        return $this->tipomissoes;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipomissoes($tipomissoes) {
        $this->tipomissoes = $tipomissoes;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}
