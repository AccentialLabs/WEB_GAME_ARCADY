<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jogos_model
 *
 * @author MATHEUS ODILON 
 * 
 */
class Jogos_model extends CI_Model {

    //put your code here

    public function __construct() {
        $this->load->database();
    }

    public function get_jogos($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('jogos');
            return $query->result_array();
        }

        $query = $this->db->get_where('jogos', array('id' => $slug));

        return $query->row_array();
    }

    public function insert_jogo($jogo = false) {
        $this->load->helper('url');

        $dt = date('Y-m-d');
        $data = array(
            'nome' => $jogo['nome'],
            'usuario_responsavel_empresa_id' => $jogo['usuario_responsavel_empresa_id'],
            'usuario_responsavel_nome' => $jogo['usuario_responsavel_nome'],
            'usuario_responsavel_email' => $jogo['usuario_responsavel_email'],
            'orientacoes' => $jogo['orientacoes'],
            'regras' => $jogo['regras'],
            'logo' => $jogo['logo'],
            'data_criacao' => $dt
        );

        $this->db->insert('jogos', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }
    
   

}
