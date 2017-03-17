<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProgramaRodadaObjetos_model
 *
 * @author user
 */
class ProgramaRodadaObjetos_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_programarodadaobjeto($programarodada_id, $objeto_id) {
        $this->load->helper('url');

        $data = array(
            'programarodada_id' => $programarodada_id,
            'objeto_id' => $objeto_id
        );

        $this->db->insert('programarodadaobjetos', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

}
