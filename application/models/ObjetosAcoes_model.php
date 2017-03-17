<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObjetosAcoes_model
 *
 * @author user
 */
class ObjetosAcoes_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
    public function insert_objetos_acoes($dados){
        $this->load->helper('url');
      

        $data = array(
            'acao_id' => $dados['acao_id'],
            'objeto_id' => $dados['objeto_id'],
            'obrigatorio' => 0    
        );
        
     return $this->db->insert('objetos_acoes', $data);
    }
}
