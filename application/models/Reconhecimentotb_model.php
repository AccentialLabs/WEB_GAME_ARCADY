<?php
include("/../entities/ReconhecimentotbEntity.php");
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

class Reconhecimentotb_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_reconhecimentotb($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('reconhecimentotb');
            return $query->result_array();
        }

        $query = $this->db->get_where('reconhecimentotb', array('id' => $slug));
        
        
        $reconhecimentotbEntity = new ReconhecimentotbEntity();  
        
        
        return $query->row_array();
    }
    
    public function insert_reconhecimentotb(){
        $this->load->helper('url');
        
        $reconhecimentotbEntity = new ReconhecimentotbEntity();
        $reconhecimentotbEntity->setDescricao($this->input->post('descricao'));
        $reconhecimentotbEntity->setStatus($this->input->post('status'));

        $alug = url_title ($this->input->post ('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'status' => $this->input->post('status'),

        );
        
     return $this->db->insert('reconhecimentotb', $data);
    }
    //put your code here
}