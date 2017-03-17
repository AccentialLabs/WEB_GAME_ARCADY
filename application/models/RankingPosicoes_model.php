<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RankingPosicoes_model
 *
 * @author user
 */
class RankingPosicoes_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_rankingPosicoes() {
        $query = $this->db->select('*,'
                        . 'funcionario.id AS funcionarioID,'
                        . 'ranking_posicoes.id AS rankingID')
                ->from('ranking_posicoes')
                ->join('funcionario', 'funcionario.id = ranking_posicoes.jogador_id', 'inner')
                ->get();

        return $query->result_array();
    }
    
     public function insert_ranking_por_jogador($funcionarioID = 0, $posicaoAtual = 0, $posicaoAnter = 0, $pontos = 0) {

        $data = array(
            'jogador_id' => $funcionarioID,
            'pontos' => $pontos,
            'posicao_atual' => $posicaoAtual,
            'posicao_anterior' => $posicaoAnter
         );
        return $this->db->insert('ranking_posicoes', $data);
    }
}
