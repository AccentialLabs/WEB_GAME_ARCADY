<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProgramaRodadas_model
 *
 * @author user
 */
class ProgramaRodadas_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_programarodada($programa_id, $dados = null) {
        $this->load->helper('url');
        
        $data = array(
            'programa_id' => $programa_id,
            'objetivo' => $dados['objetivo'],
            'pistadica' => $dados['pistadica'],
            'temposegundos' => $dados['temposegundos'],
            'mensagemparabens' => $dados['mensagemparabens']            
        );

        $this->db->insert('programarodadas', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }
    
}
