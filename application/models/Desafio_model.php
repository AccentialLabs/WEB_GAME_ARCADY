<?php

include("/../entities/DesafioEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cidade_model
 *
 * @author Raphael Pizzo
 */
class Desafio_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_desafio($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('desafio');
            return $query->result_array();
        }

        $query = $this->db->get_where('desafio', array('id' => $slug));


        $desafioEntity = new DesafioEntity();


        return $query->row_array();
    }

    public function insert_desafio() {
        $this->load->helper('url');

        $desafioEntity = new DesafioEntity();
        $desafioEntity->setNome($this->input->post('nome'));
        $desafioEntity->setStatus($this->input->post('status'));
        $desafioEntity->setDatainicio($this->input->post('datainicio'));
        $desafioEntity->setDatatermino($this->input->post('datatermino'));
        $desafioEntity->setHorainicio($this->input->post('horainicio'));
        $desafioEntity->setHoratermino($this->input->post('horatermino'));
        $desafioEntity->setSelecdesafianteequipe($this->input->post('selecdesafianteeuipe'));
        $desafioEntity->setSelecfuncionario($this->input->post('selecfuncionario'));
        $desafioEntity->setSelecequipe($this->input->post('selecequipe'));
        $desafioEntity->setDesafiantetodos($this->input->post('desafiantetodos'));
        $desafioEntity->setDefinirmanualmente($this->input->post('definirmanualmente'));
        $desafioEntity->setIdentificada($this->input->post('identificada'));
        $desafioEntity->setAnonima($this->input->post('anonima'));
        $desafioEntity->setDesafiadoescolhe($this->input->post('desafiadoescolhe'));
        $desafioEntity->setObrigatorio($this->input->post('obrigatorio'));
        $desafioEntity->setPontuacaoextra($this->input->post('pontuacaoextra'));
        $desafioEntity->setPerde($this->input->post('perde'));
        $desafioEntity->setGanha($this->input->post('ganha'));
        $desafioEntity->setDicatela($this->input->post('dicatela'));


        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nome' => $this->input->post('nome'),
            'status' => 1,
            'datainicio' => $this->input->post('datainicio'),
            'datatermino' => $this->input->post('datatermino'),
            'horainicio' => $this->input->post('horainicio'),
            'horatermino' => $this->input->post('horatermino'),
            'selecdesafianteequipe' => $this->input->post('selecdesafianteequipe'),
            'selecfuncionario' => $this->input->post('selecfuncionario') ? $this->input->post('selecfuncionario') : 0,
            'selecequipe' => $this->input->post('selecequipe') ? $this->input->post('selecequipe') : 0,
            'desafiantetodos' => $this->input->post('desafiantetodos') ? $this->input->post('desafiantetodos') : 0,
            'definirmanualmente' => $this->input->post('definirmanualmente') ? $this->input->post('definirmanualmente') : 0,
            'identificada' => $this->input->post('identificada') ? $this->input->post('identificada') : 0,
            'anonima' => $this->input->post('anonima') ? $this->input->post('anonima') : 0,
            'desafiadoescolhe' => $this->input->post('desafiadoescolhe') ? $this->input->post('desafiadoescolhe') : 0,
            'obrigatorio' => $this->input->post('obrigatorio') ? $this->input->post('obrigatorio') : 0,
            'pontuacaoextra' => $this->input->post('pontuacaoextra'),
            'perde' => $this->input->post('perde'),
            'ganha' => $this->input->post('ganha'),
            'dicatela' => $this->input->post('dicatela'),
        );


        $this->db->insert('desafio', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    //put your code here

    public function insert_desafio_porJogo($jogo_id = 0) {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nome' => $this->input->post('nome'),
            'jogo_id' => $jogo_id,
            'status' => 1,
            'datainicio' => $this->input->post('datainicio'),
            'datatermino' => $this->input->post('datatermino'),
            'horainicio' => $this->input->post('horainicio'),
            'horatermino' => $this->input->post('horatermino'),
            'selecdesafianteequipe' => $this->input->post('selecdesafianteequipe'),
            'selecfuncionario' => $this->input->post('selecfuncionario') ? $this->input->post('selecfuncionario') : 0,
            'selecequipe' => $this->input->post('selecequipe') ? $this->input->post('selecequipe') : 0,
            'desafiantetodos' => $this->input->post('desafiantetodos') ? $this->input->post('desafiantetodos') : 0,
            'definirmanualmente' => $this->input->post('definirmanualmente') ? $this->input->post('definirmanualmente') : 0,
            'identificada' => $this->input->post('identificada') ? $this->input->post('identificada') : 0,
            'anonima' => $this->input->post('anonima') ? $this->input->post('anonima') : 0,
            'desafiadoescolhe' => $this->input->post('desafiadoescolhe') ? $this->input->post('desafiadoescolhe') : 0,
            'obrigatorio' => $this->input->post('obrigatorio') ? $this->input->post('obrigatorio') : 0,
            'pontuacaoextra' => $this->input->post('pontuacaoextra'),
            'perde' => $this->input->post('perde'),
            'ganha' => $this->input->post('ganha'),
            'dicatela' => $this->input->post('dicatela'),
        );


        $this->db->insert('desafio', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

}
