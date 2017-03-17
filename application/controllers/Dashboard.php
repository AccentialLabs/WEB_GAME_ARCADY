<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Dashboard
 *
 * @author Raphael Pizzo
 */
class Dashboard extends CI_Controller {

    //put your code here

    /* acrescentamos o construct como primero passo */
    public function __construct() {
        parent::__construct();
        $this->load->model('ranking_model');
        $this->load->model('rankingposicoes_model');
        $this->load->model('jogador_model');
        $this->load->model('jogos_model');
        $this->load->helper('url_helper');

        $this->load->model('missoestab_model');
        $this->load->model('programas_model');
    }

    /* Fim do construct */

    public function index() {

        //$data['cidades'] = $this->cidade_model->get_cidades(FALSE);
        // print_r($data);
        $this->load->view('templates/header');
        $this->load->view('dashboard/index');
    }

    public function principal() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');

        $data['rankingsIndividual'] = $this->ranking_model->get_ranking();
        $data['rankingsCargo'] = $this->ranking_model->get_ranking_por_cargo();
        $data['rankingsDepartamento'] = $this->ranking_model->get_ranking_por_departamento();
        $data['rankingsUnidade'] = $this->ranking_model->get_ranking_por_unidade();
        $data['rankingsCidade'] = $this->ranking_model->get_ranking_por_cidade();
        $data['rankingsEstado'] = $this->ranking_model->get_ranking_por_estado();
        $data['rankingsPais'] = $this->ranking_model->get_ranking_por_pais();

        $data['jogador'] = $this->jogador_model->get_jogador();
        $data['missoes'] = $this->missoestab_model->get_missoestab();
        $data['programas'] = $this->programas_model->get_programas();

        $this->load->view('templates/gaming_default');
        $this->load->view('dashboard/principal', $data);
    }

    public function testeLayout() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');



        $this->load->view('dashboard/teste_layout', $data);
    }

    public function dashboard() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');

        $data['jogos'] = $this->jogos_model->get_jogos();
        
        $this->load->view('templates/gaming_default');
        $this->load->view('dashboard/dashboard', $data);
    }

}
