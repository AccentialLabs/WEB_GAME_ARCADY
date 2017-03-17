<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JogadorJogo_model
 *
 * @author user
 */
class JogadorJogo_model extends CI_Model {

    //put your code here

    public function __construct() {
        $this->load->database();
    }

    public function get_jogodoresPorJOGO($jogo_id = FALSE) {

        $this->db->where('jogo_id', $jogo_id);

        $query = $this->db->get();

        return $query->row_array();
    }

    public function insert_jogador_jogo($dados = false) {
        $this->load->helper('url');

        $dt = date('Y-m-d');
        $data = array(
            'jogo_id' => $dados['jogo_id'],
            'jogador_id' => $dados['jogador_id'],
            'data_atribuicao' => $dt
        );

        $this->db->insert('jogador_jogo', $data);

        $num_inserts = $this->db->affected_rows();

        return $num_inserts;
    }

}
