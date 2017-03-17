<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JogadorMissoes_model
 *
 * @author user
 */
class JogadorMissoes_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

    
    public function insert_jogadormissao($missao_id = 0, $jogador_id = 0){  
        $this->load->helper('url');

            $dToday = date('Y-m-d');
           $data = array(
            'missao_id' => $missao_id,
            'jogador_id' => $jogador_id,
            //'imagem' => $this->input->post('imagem'),
            'dataatribuicao' => $dToday,
            'realizado' => 0 
        );
           
         return $this->db->insert('jogadormissoes', $data);
    }
    
}
