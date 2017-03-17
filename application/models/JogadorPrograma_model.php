<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JogadorPrograma_model
 *
 * @author user
 */
class JogadorPrograma_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_jogadorprograma($programa_id, $dados = null) {
        $this->load->helper('url');

        $data = array(
            'programa_id' => $programa_id,
            'jogador_id' => $dados['jogador_id'],
                // 'time_id' => $dados['time_id'],
                // 'personagem_id' => $dados['personagem_id'],
        );

        $this->db->insert('jogadorprograma', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

}
