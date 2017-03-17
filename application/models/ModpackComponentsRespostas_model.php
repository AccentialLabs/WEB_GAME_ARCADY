<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModpackComponentsRespostas_model
 *
 * @author user
 */
class ModpackComponentsRespostas_model extends CI_Model {

    //put your code here
    public function __construct() {
        $this->load->database();
    }
    
    public function insert_resposta($dataInsert) {
        $this->load->helper('url');

        $data = array(
        'descricao' => $dataInsert['descricao'],
        'ganha_perde' => $dataInsert['ganha_perde'],
        'certa' => $dataInsert['certa'],
        'pontos' => $dataInsert['pontos'],
        'status' => $dataInsert['status'],
        'modpackcomponent_id' => $dataInsert['modpackcomponent_id']
        );

        return $this->db->insert('modpackcomponents_respostas', $data);
    }

}
