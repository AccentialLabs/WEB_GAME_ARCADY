<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Respostasobjeto_model
 *
 * @author user
 */
class Respostasobjeto_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_respostaobjeto($dataInsert) {
        $this->load->helper('url');

        $data = array(
        'descricao' => $dataInsert['descricao'],
        'ganha_perde' => $dataInsert['ganha_perde'],
        'ordem_numero' => $dataInsert['ordem_numero'],
        'qtd_pontos' => $dataInsert['qtd_pontos'],
        'status' => $dataInsert['status'],
        'objeto_id' => $dataInsert['objeto_id']
        );

        return $this->db->insert('respostasobjeto', $data);
    }

}
