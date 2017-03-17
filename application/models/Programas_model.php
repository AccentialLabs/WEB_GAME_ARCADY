<?php

include("/../entities/ProgramasEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// !important
//Nessa tela esta incluso os Arquivos (Progrmas Entity,Cadastrar programas.php, programas model, e o Controller Programa!.)

/**
 * Description of Programas_model
 *
 * @author Raphael Pizzo
 */
class Programas_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_programas($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('programas');
            return $query->result_array();
        }

        $query = $this->db->get_where('programas', array('id' => $slug));

        $programasEntity = new ProgramasEntity();

        return $query->row_array();
    }

    public function insert_programas() {
        $this->load->helper('url');

        $programasEntity = new ProgramasEntity();
        $programasEntity->setNome($this->input->post('nome'));
        $programasEntity->setStatus($this->input->post('status'));
        $programasEntity->setDatainicio($this->input->post('datainicio'));
        $programasEntity->setDatatermino($this->input->post('datatermino'));
        $programasEntity->setHorainicio($this->input->post('horainicio'));
        $programasEntity->setHoratermino($this->input->post('horatermino'));
        $programasEntity->setObjetivo($this->input->post('objetivo'));
        $programasEntity->setLocalmapa($this->input->post('localmapa'));
        $programasEntity->setRodadasvezes($this->input->post('rodadasvezes'));
        $programasEntity->setRodadasdiferentes($this->input->post('rodadasdiferentes'));
        $programasEntity->setAutomaticarodada($this->input->post('automaticarodada'));
        $programasEntity->setFacilitadorrodada($this->input->post('facilitadorodada'));
        $programasEntity->setIntervalo($this->input->post('intervalo'));
        $programasEntity->setGestor_id($this->input->post('gestor_id'));
        $programasEntity->setFacilitador_id($this->input->post('facilitador_id'));
        $programasEntity->setPontuacao($this->input->post('pontuacao'));
        $programasEntity->setScoregeral($this->input->post('scoregeral'));
        $programasEntity->setPremiacaoindividual($this->input->post('premiacaoindividual'));
        $programasEntity->setPremiacaoequipe($this->input->post('premiacaoequipe'));
        $programasEntity->setPremiacaotodos($this->input->post('premiacaotodos'));
        $programasEntity->setMensagemparabens($this->input->post('mensagemparabens'));
        $programasEntity->setPontosextras($this->input->post('pontosextras'));
        $programasEntity->setPremiaequipes($this->input->post('premiaequipes'));
        $programasEntity->setGestorrodada($this->input->post('gestorrodada'));
        $programasEntity->setSelecionepremio($this->input->post('selecionepremio'));

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'nome' => $this->input->post('nome'),
            'status' => 1,
            'datainicio' => $this->input->post('datainicio'),
            'datatermino' => $this->input->post('datatermino'),
            'horainicio' => $this->input->post('horainicio'),
            'horatermino' => $this->input->post('horatermino'),
            'objetivo' => $this->input->post('objetivo'),
            'localmapa' => $this->input->post('localmapa'),
            'rodadasvezes' => $this->input->post('rodadasvezes'),
            'rodadasdiferentes' => $this->input->post('rodadasdiferentes') ? $this->input->post('rodadasdiferentes') : 0,
            'automaticarodada' => $this->input->post('automaticarodada') ? $this->input->post('automaticarodada') : 0,
            'facilitadorrodada' => $this->input->post('facilitadorrodada') ? $this->input->post('facilitadorrodada') : 0,
            'intervalo' => $this->input->post('intervalo'),
            'gestor_id' => $this->input->post('gestor_id'),
            'facilitador_id' => $this->input->post('facilitador_id'),
            'pontuacao' => $this->input->post('pontuacao'),
            'scoregeral' => $this->input->post('scoregeral') ? $this->input->post('scoregeral') : 0,
            'premiacaoindividual' => $this->input->post('premiacaoindividual') ? $this->input->post('premiacaoindividual') : 0,
            'premiacaoequipe' => $this->input->post('premiacaoequipe') ? $this->input->post('premiacaoequipe') : 0,
            'premiacaotodos' => $this->input->post('premiacaotodos') ? $this->input->post('premiacaotodos') : 0,
            'mensagemparabens' => $this->input->post('mensagemparabens'),
            'pontosextras' => $this->input->post('pontosextras'),
            'premiaequipes' => $this->input->post('premiaequipes') ? $this->input->post('premiaequipes') : 0,
            'gestorrodada' => $this->input->post('gestorrodada') ? $this->input->post('gestorrodada') : 0,
            'selecionepremio' => $this->input->post('selecionepremio')
        );

        $this->db->insert('programas', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    //put your code here
}
