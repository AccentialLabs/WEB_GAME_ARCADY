<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipoobjeto_model
 *
 * @author user
 */
class Tipoobjeto_model extends CI_Model {
    
     public function __construct() {
        $this->load->database();
    }
    
     public function get_tipoobjetos($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('tipoobjeto');
            return $query->result_array();
        }

        $query = $this->db->get_where('tipoobjeto', array('id' => $slug));         
        
        return $query->row_array();
    }
    
      public function insert_tipoobjeto(){
        $this->load->helper('url');

        $datacriacao = date('Y-m-d');
        $data = array(
            'titulo' => $this->input->post('titulo'),
            'status' => $this->input->post('status'),
            'datacriacao' => $datacriacao
                
        );
        
     return $this->db->insert('tipoobjeto', $data);
    }

}
