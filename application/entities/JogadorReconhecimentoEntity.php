<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JogadorReconhecimentoEntity
 *
 * @author Matheus Odilon
 */
class JogadorReconhecimentoEntity {
    //put your code here
    
    private $id;
    private $jogador;
    private $reconhecimento;
    private $datacriacao;
    
    
    public function getId() {
        return $this->id;
    }

    public function getJogador() {
        return $this->jogador;
    }

    public function getReconhecimento() {
        return $this->reconhecimento;
    }

    public function getDatacriacao() {
        return $this->datacriacao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setJogador_id($jogador) {
        $this->jogador_id = $jogador;
    }

    public function setReconhecimento_id($reconhecimento) {
        $this->reconhecimento_id = $reconhecimento;
    }

    public function setDatacriacao($datacriacao) {
        $this->datacriacao = $datacriacao;
    }


}
