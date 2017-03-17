<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JogadorEquipe_model
 *
 * @author user
 */
class JogadorEquipe_model  extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    
    public function get_equipes_por_jogador($slug = FALSE) {
           
        $query = $this->db->select('*,'
                     . 'jogadorequipes.id AS jogadorequipesID,'
                     . 'equipes.id AS equipesID')
                    ->from('jogadorequipes')
                    ->join('equipes', 'equipes.id = jogadorequipes.equipe_id', 'inner')
                     ->where('jogadorequipes.jogador_id = '.$slug)
                    ->get();
        
        return  $query->result_array();
    }
}
