<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReconhecimentoModPack_model
 *
 * @author user
 */
class ReconhecimentoModPack_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
    public function insert_reconhecimentos_modpack($dados){
        $this->load->helper('url');
      
        $data = array(
            'modpack_id' => $dados['modpack_id'],
            'reconhecimento_id' => $dados['reconhecimento_id']  
        );
        
     return $this->db->insert('reconhecimento_modpack', $data);
    }
}