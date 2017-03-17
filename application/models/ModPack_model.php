<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GoalPack_model
 *
 * @author user
 */
class ModPack_model extends CI_Model {

    //put your code here

    public function __construct() {
        $this->load->database();
    }

    public function get_modpacks($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('modpack');
            return $query->result_array();
        }

        $query = $this->db->get_where('modpack', array('slug' => $slug));

        return $query->row_array();
    }

    public function insert_modpack() {
        $this->load->helper('url');

        $data = array(
            'titulo' => $this->input->post('titulo'),
            'descricao' => $this->input->post('descricao'),
            'status' => 1,
            'localizacao' => $this->input->post('localizacao'),
            'dt_registro' => date('Y-m-d'),
        );

        $this->db->insert('modpack', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

}
