<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DesafioObjeto_model
 *
 * @author user
 */
class DesafioObjeto_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_etapaobjetos($desafio_id = 0, $objeto_id = 0) {
        $this->load->helper('url');

        $dataregistro = date('Y-m-d');

        $data = array(
            'desafio_id' => $desafio_id,
            'objeto_id' => $objeto_id,
            'dataregistro' => $dataregistro
        );

        $this->db->insert('dasafioobjetos', $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

}
