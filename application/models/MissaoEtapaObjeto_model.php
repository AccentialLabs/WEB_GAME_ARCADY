<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MissaoEtapaObjeto_model
 *
 * @author user
 */
class MissaoEtapaObjeto_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_etapaobjetos($missaoetapa_id = 0, $etapa) {
        $this->load->helper('url');

        $data = array(
            'missaoetapa_id' => $missaoetapa_id,
            'objeto_id' => $etapa['objeto_id'],
            'ordem' =>  $etapa['ordem']
        );

        $this->db->insert('missaoetapaobjetos', $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }
}
