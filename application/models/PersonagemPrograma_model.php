<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonagemPrograma_model
 *
 * @author user
 */
class PersonagemPrograma_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_personagemprograma($programa_id, $data) {
        $this->load->helper('url');

        $date = date('Y-m-d');
        $data = array(
            'programa_id' => $programa_id,
            'nome' => $data['nome'],
            'quatidademaxima' => $data['quantidademaxima']
        );

        $this->db->insert('personagemprograma', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

}
