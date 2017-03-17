<?php

include("/../entities/ObjetosEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Objetos_model
 *
 * @author Raphael Pizzo
 */
class Objetos_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_objetos($slug = FALSE) {
        if ($slug === FALSE) {
            //$query = $this->db->get('objetos');
            /*$query = $this->db->select('*, tipocategoria.descricao AS categoriaDescricao, objetos.descricao AS objDescricao, tipocategoria.id AS categoriaId, objetos.id AS objId, tipocategoria.status AS categoriaStatus, objetos.status AS objStatus')
                    ->from('objetos')
                    ->join('tipocategoria', 'tipocategoria.id = objetos.categoria', 'inner')
                    ->get(); */
            
             $query = $this->db->select('*, objetos.descricao AS objDescricao, tipoobjeto.id AS categoriaId, objetos.id AS objId, tipoobjeto.status AS categoriaStatus, objetos.status AS objStatus')
                    ->from('objetos')
                    ->join('tipoobjeto', 'tipoobjeto.id = objetos.categoria', 'inner')
                    ->get();
            return $query->result_array();
        }

        //$query = $this->db->get_where('objetos', array('id' => $slug));  
        $query = $this->db->select('objetos.* objetos, tipocategoria.* categoria, tipocategoria.id AS categoriaId, objetos.id AS objId')
                ->from('objetos')
                ->join('tipocategoria', 'tipocategoria.id = objetos.categoria', 'inner')
                ->where('objetos.id', array('id' => $slug))
                ->get();


        return $query->row_array();
    }

    public function insert_objetos() {

        $this->load->helper('url');

        $objetosEntity = new ObjetosEntity();
        $objetosEntity->setObjeto($this->input->post('objeto'));
        $objetosEntity->setCategoria($this->input->post('categoria'));
        $objetosEntity->setObrigacao($this->input->post('obrigacao'));
        $objetosEntity->setStatus($this->input->post('status'));
        $objetosEntity->setAtivo($this->input->post('ativo'));
        $objetosEntity->setPerguntas($this->input->post('perguntas'));
        $objetosEntity->setPontos($this->input->post('pontos'));
        $objetosEntity->setPersonagem($this->input->post('personagem'));
        $objetosEntity->setOrdem($this->input->post('ordem'));

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),
            'categoria' => $this->input->post('categoria'),
            'tipo_resposta' => $this->input->post('tipo_resposta'),
            'descritiva_min_caracter' => $this->input->post('descritiva_min_caracter'),
            'descritiva_pontos' => $this->input->post('descritiva_pontos'),
            'numero_tentativa' => $this->input->post('numero_tentativa'),
            'limite_tempo' => $this->input->post('limite_tempo'),
            'mostrar_resposta_correta' => $this->input->post('mostrar_resposta_correta'),
            'escala' => $this->input->post('escala'),
            'escala_valor_inicial' => $this->input->post('escala_valor_inicial'),
            'escala_incremento' => $this->input->post('escala_incremento'),
            'escala_valor_final' => $this->input->post('escala_valor_final'),
            'pontuacao_ponto_medio' => $this->input->post('pontuacao_ponto_medio'),
            'pontuacao_ponto_medio_abaixo' => $this->input->post('pontuacao_ponto_medio_abaixo'),
            'pontuacao_ponto_medio_acima' => $this->input->post('pontuacao_ponto_medio_acima'),
            'intersecao_fisica' => $this->input->post('intersecao_fisica'),
            'intersecao_fisica_pontos' => $this->input->post('intersecao_fisica_pontos'),
            'habilita_qrcode' => $this->input->post('habilita_qrcode')
        );

        $this->db->insert('objetos', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    //put your code here
}
