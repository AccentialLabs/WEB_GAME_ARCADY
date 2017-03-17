<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipesAcoes_model
 *
 * @author user
 */
class EquipesAcoes_model extends CI_Model {

    //put your code here

    public function __construct() {
        $this->load->database();
    }

    public function get_jogadores_por_equipe($equipe_id) {
        $query = $this->db->select('jogadorequipes.*, funcionario.*, jogadorequipes.id AS jogadorId, jogadorequipes.id AS jogadorequipeId')
                ->from('jogadorequipes')
                ->join('funcionario', 'funcionario.id = jogadorequipes.jogador_id', 'inner')
                ->where('jogadorequipes.equipe_id',  $equipe_id)
                ->get();


        return $query->row_array();
    }

    public function insert_equipes_acoes($dados) {
        $this->load->helper('url');


        $data = array(
            'acao_id' => $dados['acao_id'],
            'equipe_id' => $dados['equipe_id'],
        );

        return $this->db->insert('equipes_acoes', $data);
    }

    //put your code here
}
