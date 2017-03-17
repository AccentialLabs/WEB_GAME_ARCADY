<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Trimestremodpack_model
 *
 * @author user
 */
class Trimestremodpack_model extends CI_Model {

    //put your code here

    public function __construct() {
        $this->load->database();
    }

    public function insert_trimestre($dados) {
        $this->load->helper('url');

        $data = array(
            'modpack_id' => $dados['modpack_id'],
            'titulo' => $dados['titulo'],
            'dica' => $dados['dica'],
            'dt_fim' => $dados['dt_fim'],
            'dt_inicio' => $dados['dt_inicio'],
            'hr_inicio' => $dados['hr_inicio'],
            'hr_fim' => $dados['hr_fim'],
            'meta_geral' => !empty($dados['meta_geral']) ? $dados['meta_geral'] : '0',
            'meta_por_usuario' => !empty($dados['meta_por_usuario']) ? $dados['meta_por_usuario'] : '0',
            'meta_por_equipe' => !empty($dados['meta_por_equipe']) ? $dados['meta_por_equipe'] : '0',
            'mensagem_atingimento' => $dados['mensagem_atingimento'],
            'resultado' => $dados['resultado'],
            'sumariza_por_grupo' => !empty($dados['sumariza_por_grupo']) ? $dados['sumariza_por_grupo'] : '0',
            'comparacao_de_perfomance' => !empty($dados['comparacao_de_perfomance']) ? $dados['comparacao_de_perfomance'] : '0',
            'new_tablecolgrafico_de_resumo' => !empty($dados['new_tablecolgrafico_de_resumo']) ? $dados['new_tablecolgrafico_de_resumo'] : '0',
            'tipo_grafico_de_resumo' => $dados['tipo_grafico_de_resumo'],
            'grafico_comparativo' => !empty($dados['grafico_comparativo']) ? $dados['grafico_comparativo'] : '0',
            'tipo_grafico_comparativo' => $dados['tipo_grafico_comparativo']
        );

        return $this->db->insert('trimestresmodpack', $data);
    }

}
