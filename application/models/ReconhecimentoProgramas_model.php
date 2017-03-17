<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReconhecimentoProgramas_model
 *
 * @author user
 */
class ReconhecimentoProgramas_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
    public function insert_reconhecimentos_programa($dados){
        $this->load->helper('url');
      
        $data = array(
            'programa_id' => $dados['programa_id'],
            'reconhecimento_id' => $dados['reconhecimento_id']  
        );
        
     return $this->db->insert('reconhecimento_programas', $data);
    }
}