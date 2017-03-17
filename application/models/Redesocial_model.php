<?php

include("/../entities/RedesocialEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Redesocial_model
 *
 * @author Raphael Pizzo
 */
class Redesocial_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_redesocial($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('redesocial');
            return $query->result_array();
        }

        $query = $this->db->get_where('redesocial', array('id' => $slug));


        $redesocialEntity = new RedesocialEntity();


        return $query->row_array();
    }

    public function insertorupdate_redesocial($redesocial) {
        $this->load->helper('url');

        $dataAtual = date('Y-m-d');
        $data = array(
            'empresa_id' => $redesocial('empresa_id'),
            'datacadastro' => $dataAtual,
            'profile_url' => $redesocial('profile_url'),
            'socialnetwork' => $redesocial('socialnetwork')
        );

        //vamos verificar se será INSERT or UPDATE
        $this->db->where('socialnetwork', $redesocial('socialnetwork'));
        $q = $this->db->get('redesocial');

        $retorno = '';
        if ($q->num_rows() > 0) {
            //$this->db->where('user_id', $id);
            $retorno = $this->db->update('redesocial', $data);
        } else {
            //$this->db->set('user_id', $id);
            $retorno = $this->db->insert('redesocial', $data);
        }

        return $retorno;
    }

    //put your code here
}
