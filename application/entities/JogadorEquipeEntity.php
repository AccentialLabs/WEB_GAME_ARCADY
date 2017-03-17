<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JogadorEquipeEntity
 *
 * @author user
 */
class JogadorEquipeEntity {
    //put your code here
    
    private $id;
    private $jogador;
    private $equipe;
    private $datacriacao;
    
    public function getId() {
        return $this->id;
    }

    public function getJogador() {
        return $this->jogador;
    }

    public function getEquipe() {
        return $this->equipe;
    }

    public function getDatacriacao() {
        return $this->datacriacao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setJogador($jogador) {
        $this->jogador = $jogador;
    }

    public function setEquipe($equipe) {
        $this->equipe = $equipe;
    }

    public function setDatacriacao($datacriacao) {
        $this->datacriacao = $datacriacao;
    }


}
