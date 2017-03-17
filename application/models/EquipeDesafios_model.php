<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipeDesafios_model
 *
 * @author user
 */
class EquipeDesafios_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_equipedesafio($desafio_id = 0, $equipe_id = 0) {
        $this->load->helper('url');

        $dt = date("Y-m-d");
        $data = array(
            'desafio_id' => $desafio_id,
            'equipe_id' => $equipe_id,
            //'imagem' => $this->input->post('imagem'),
            'dataatribuicao' => $dt,
            'realizado' => 0
        );

        return $this->db->insert('equipedesafios', $data);
    }

}
