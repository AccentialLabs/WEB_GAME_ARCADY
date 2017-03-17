<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModpackComponents_model
 *
 * @author user
 */
class ModpackComponents_model extends CI_Model {

    //put your code here


    public function __construct() {
        $this->load->database();
    }

    public function select_components_by_components_skill() {

        $query = $this->db->get_where('modpackcomponents', array('objeto_desc' => 'Teste de Competência'));

        return $query->result_array();
    }

    public function select_components_by_face_facts() {

        $query = $this->db->get_where('modpackcomponents', array('objeto_desc' => 'Face Facts'));

        return $query->result_array();
    }

    public function insert_component_by_components_skill() {
        $this->load->helper('url');

        $alug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'objeto_desc' => $this->input->post('objeto_desc'),
            'grupo_desc' => $this->input->post('grupo_desc'),
            'componente_desc' => $this->input->post('componente_desc'),
            'tipo_resposta' => $this->input->post('tipo_resposta'),
            'resposta_descritiva_obrigatorio' => $this->input->post('resposta_descritiva_obrigatorio'),
            'resposta_descritiva_qtd_caracter' => $this->input->post('resposta_descritiva_qtd_caracter'),
            'resposta_descritiva_pontos' => $this->input->post('resposta_descritiva_pontos'),
            'resposta_alternativa_mostra_correta' => $this->input->post('resposta_alternativa_mostra_correta'),
            'resposta_escala_valor_minimo' => $this->input->post('resposta_escala_valor_minimo'),
            'resposta_escala_valor_incremento' => $this->input->post('resposta_escala_valor_incremento'),
            'resposta_escala_label_inicial' => $this->input->post('resposta_escala_label_inicial'),
            'resposta_escala_label_final' => $this->input->post('resposta_escala_label_final'),
            'resposta_escala_pontuacao_ponto_medio' => $this->input->post('resposta_escala_pontuacao_ponto_medio'),
            'resposta_escala_pontuacao_ponto_medio_abaixo' => $this->input->post('resposta_escala_pontuacao_ponto_medio_abaixo'),
            'resposta_escala_pontuacao_ponto_medio_acima' => $this->input->post('resposta_escala_pontuacao_ponto_medio_acima'),
            'resposta_escala_pontuacao_conforme_escala' => $this->input->post('resposta_escala_pontuacao_conforme_escala'),
            'limite_tempo' => $this->input->post('limite_tempo')
        );

        $this->db->insert('modpackcomponents', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    public function insert_component_by_face_facts() {
        $this->load->helper('url');

        $alug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'objeto_desc' => $this->input->post('objeto_desc'),
            'grupo_desc' => $this->input->post('grupo_desc'),
            'componente_desc' => $this->input->post('componente_desc'),
            'tipo_resposta' => $this->input->post('tipo_resposta'),
            'foto' => $this->input->post('foto'),
            'resposta_alternativa_mostra_correta' => $this->input->post('resposta_alternativa_mostra_correta'),
            'limite_tempo' => $this->input->post('limite_tempo')
        );

        $this->db->insert('modpackcomponents', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

}
