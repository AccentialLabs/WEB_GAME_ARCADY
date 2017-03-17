<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PremioPrograma_model
 *
 * @author user
 */
class PremioPrograma_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_premioprograma($programa_id, $premio_id = null) {
        $this->load->helper('url');

        $date = date('Y-m-d');
        $data = array(
            'programa_id' => $programa_id,
            'premio_id' => $premio_id,
            'dataatribuicao' => $date
                // 'time_id' => $dados['time_id'],
                // 'personagem_id' => $dados['personagem_id'],
        );

        $this->db->insert('programapremio', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }
}
