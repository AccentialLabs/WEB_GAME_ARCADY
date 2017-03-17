<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReconhecimentoMissoes_model
 *
 * @author user
 */
class ReconhecimentoMissoes_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
    public function insert_reconhecimentos_missoes($dados){
        $this->load->helper('url');
      
        $data = array(
            'missao_id' => $dados['missao_id'],
            'reconhecimento_id' => $dados['reconhecimento_id']  
        );
        
     return $this->db->insert('reconhecimento_missoes', $data);
    }
}