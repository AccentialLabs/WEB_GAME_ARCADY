<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RankingEntity
 *
 * @author user
 */
class RankingEntity {
    //put your code here
    
    private  $id;
    private $jogador;
    private $pontos;
    
    public function getId() {
        return $this->id;
    }

    public function getJogador() {
        return $this->jogador;
    }

    public function getPontos() {
        return $this->pontos;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setJogador($jogador) {
        $this->jogador = $jogador;
    }

    public function setPontos($pontos) {
        $this->pontos = $pontos;
    }

 
}