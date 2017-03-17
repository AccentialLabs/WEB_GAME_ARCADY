<?php
include("/../entities/CategoriatbEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acoes_model
 *
 * @author Raphael Pizzo
 */

class Categoriatb_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_categoriatb($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('tipocategoria');
            return $query->result_array();
        }

        $query = $this->db->get_where('tipocategoria', array('id' => $slug));
        
        
        $categoriatbEntity = new CategoriatbEntity();  
        
        
        return $query->row_array();
    }
    
    public function insert_categoriatb(){
        $this->load->helper('url');
        
        $categoriatbEntity = new CategoriatbEntity();
        $categoriatbEntity->setCategoriaobjetos($this->input->post('categoriaobjetos'));
        $categoriatbEntity->setStatus($this->input->post('status'));

       

        $alug = url_title ($this->input->post ('title'), 'dash', TRUE);

        $data = array(
            'categoriaobjetos' => $this->input->post('categoriaobjetos'),
            'status' => $this->input->post('ststus')
                
        );
        
     return $this->db->insert('categoriatb', $data);
    }
    //put your code here
}