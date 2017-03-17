<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JogadorDesafios_model
 *
 * @author user
 */
class JogadorDesafios_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_jogadordesafio($desafio_id = 0, $jogador_id = 0) {
        $this->load->helper('url');

        $dt = date("Y-m-d");
        $data = array(
            'desafio_id' => $desafio_id,
            'jogador_id' => $jogador_id,
            //'imagem' => $this->input->post('imagem'),
            'dataatribuicao' => $dt,
            'realizado' => 0
        );

        return $this->db->insert('jogadordesafios', $data);
    }
    
    public function insert_jogadordesafioWithDesafiante($desafio_id = 0, $jogador_id = 0, $desafiante_id = 0) {
        $this->load->helper('url');

        $dt = date("Y-m-d");
        $data = array(
            'desafio_id' => $desafio_id,
            'jogador_id' => $jogador_id,
            //'imagem' => $this->input->post('imagem'),
            'dataatribuicao' => $dt,
            'realizado' => 0,
            'desafiante_id' => $desafiante_id
        );

        return $this->db->insert('jogadordesafios', $data);
    }
    //put your code here
}
