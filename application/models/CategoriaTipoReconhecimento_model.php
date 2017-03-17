<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriaTipoReconhecimento_model
 *
 * @author user
 */
class CategoriaTipoReconhecimento_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_categorias_tipo_reconhecimento($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('categoriatiporeconhecimento');
            return $query->result_array();
        }

        $query = $this->db->get_where('categoriatiporeconhecimento', array('id' => $slug));
        
        
        return $query->row_array();
    }
}
