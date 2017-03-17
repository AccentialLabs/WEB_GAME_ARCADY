<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ranking_model
 *
 * @author user
 */
class Ranking_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_ranking() {
        $query = $this->db->select('*,'
                        . 'funcionario.id AS funcionarioID,'
                        . 'ranking.id AS rankingID')
                ->from('ranking')
                ->join('funcionario', 'funcionario.id = ranking.jogador_id', 'inner')
                ->order_by("ranking.pontos", "DESC")
                ->get();

        return $query->result_array();
    }

    public function get_ranking_por_cargo() {

        $query = $this->db->select('funcionario.cargo cargo, '
                        . 'sum(ranking.pontos) pontos')
                ->from('ranking')
                ->join('funcionario', 'funcionario.id = ranking.jogador_id', 'inner')
                ->group_by("funcionario.cargo")
                ->get();

        return $query->result_array();
    }

    public function get_ranking_por_departamento() {

        $query = $this->db->select('funcionario.departamento departamento, '
                        . 'sum(ranking.pontos) pontos')
                ->from('ranking')
                ->join('funcionario', 'funcionario.id = ranking.jogador_id', 'inner')
                ->group_by("funcionario.departamento")
                ->get();

        return $query->result_array();
    }

    public function get_ranking_por_unidade() {

        $query = $this->db->select('funcionario.unidade unidade, '
                        . 'sum(ranking.pontos) pontos')
                ->from('ranking')
                ->join('funcionario', 'funcionario.id = ranking.jogador_id', 'inner')
                ->group_by("funcionario.unidade")
                ->get();

        return $query->result_array();
    }
    
     public function get_ranking_por_cidade() {

        $query = $this->db->select('funcionario.cidade cidade, '
                        . 'sum(ranking.pontos) pontos')
                ->from('ranking')
                ->join('funcionario', 'funcionario.id = ranking.jogador_id', 'inner')
                ->group_by("funcionario.cidade")
                ->get();

        return $query->result_array();
    }
    
     public function get_ranking_por_estado() {

        $query = $this->db->select('funcionario.estado estado, '
                        . 'sum(ranking.pontos) pontos')
                ->from('ranking')
                ->join('funcionario', 'funcionario.id = ranking.jogador_id', 'inner')
                ->group_by("funcionario.estado")
                ->get();

        return $query->result_array();
    }

     public function get_ranking_por_pais() {

        $query = $this->db->select('funcionario.pais pais, '
                        . 'sum(ranking.pontos) pontos')
                ->from('ranking')
                ->join('funcionario', 'funcionario.id = ranking.jogador_id', 'inner')
                ->group_by("funcionario.pais")
                ->get();

        return $query->result_array();
    }

    public function get_ranking_por_jogador($slug = FALSE) {

        $query = $this->db->select('*,'
                        . 'funcionario.id AS funcionarioID,'
                        . 'ranking.id AS rankingID')
                ->from('ranking')
                ->join('funcionario', 'funcionario.id = ranking.jogador_id', 'inner')
                ->where('ranking.jogador_id = ' . $slug)
                ->get();

        return $query->result_array();
    }

    public function insert_ranking_por_jogador($funcionarioID = 0) {

        $data = array(
            'jogador_id' => $funcionarioID,
            'pontos' => 0
        );
        return $this->db->insert('ranking', $data);
    }

}
