<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JogadorAcao_model
 *
 * @author user
 */
class JogadorAcao_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_all_acoesporjogador($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('jogadoracao');
            return $query->result_array();
        }

        $query = $this->db->get_where('jogadoracao', array('id' => $slug));

        return $query->row_array();
    }

    public function insert_jogadoracao($acao_id = 0, $jogador_id = 0) {
        $this->load->helper('url');

        $nowDate = date('Y-m-d');

        $data = array(
            'acao_id' => $acao_id,
            'jogador_id' => $jogador_id,
            //'imagem' => $this->input->post('imagem'),
            'dataatribuicao' => $nowDate,
            'realizado' => 0
        );

        return $this->db->insert('jogadoracao', $data);
    }

}
