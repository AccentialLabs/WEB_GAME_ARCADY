<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Missoes extends CI_Controller {

    //put your code here

    /* acrescentamos o construct como primero passo */
    public function __construct() {
        parent::__construct();
        $this->load->model('jogadormissoes_model');
        $this->load->model('equipemissoes_model');

        $this->load->model('funcionario_model');
        $this->load->model('equipes_model'); //esse  codigo é da tela  (cadastrar acao)
        $this->load->model('missoes_model');
        $this->load->model('missoestab_model');
        $this->load->model('missaoetapa_model');
        $this->load->model('equipestab_model');
        $this->load->model('objetos_model');
        $this->load->model('missaoetapaobjeto_model');
        $this->load->helper('url_helper');
    }

    /* Fim do construct */

    public function cadastrarMissoes() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');

        $data['equipes'] = $this->equipes_model->get_equipes();
        $data['equipestab'] = $this->equipestab_model->get_equipestab();
        $data['objetos'] = $this->objetos_model->get_objetos();
        $data['jogadores'] = $this->funcionario_model->get_funcionario();

        $this->load->view('templates/gaming_default');
        $this->load->view('missoes/cadastrarMissoes', $data);
    }

    public function listaMissoes() {

        /**
         * 
         */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        ///// *****


        $data['missoestab'] = $this->missoestab_model->get_missoestab();

        /**
         * 
         */
        $this->load->view('templates/gaming_default');
        //******
        $this->load->view('missoes/listaMissoes', $data);
    }

    public function createMissoes() {

        #salvando missão
        $missaoID = $this->missoes_model->insert_missoes();

        // echo "sucesso";
        $data = $this->input->post('data');

        $etapas = $data['Etapa'];
        $salvaEtapa = '';

        #inicializando o array responsavel por guardar os objetos selecionados no cadastro das etapas
        $etapasObjetos = '';
        $contadorEtapasObj = 0;

        #foreach para a lista de etapas
        foreach ($etapas as $etapa) {

            $salvaEtapa['dicatela'] = $etapa['dicatela'][0];
            $salvaEtapa['datalimite'] = $etapa['datalimite'][0];
            $salvaEtapa['horalimite'] = $etapa['horalimite'][0];
            $salvaEtapa['mensagemparabens'] = $etapa['mensagemparabens'][0];

            #salvado etapas
            $etapaID = $this->missaoetapa_model->insert_missaoetapa($missaoID, $salvaEtapa);

            #alimento array de objetos com os objetos selecionados no cadastro
            $etapasObjetos[$contadorEtapasObj]['etapa_id'] = $etapaID;
            $etapasObjetos[$contadorEtapasObj]['objetos'] = $etapa['objetos'];
            $contadorEtapasObj++;
        }

        $etapa_ID = 0;
        $ordemOBJ = 1;
        #foreach para a lista de objetos
        foreach ($etapasObjetos as $obj) {

            $etapa_ID = $obj['etapa_id'];
            $ordemOBJ = 1;
            foreach ($obj['objetos'] as $objeto) {

                $dataObj = '';
                $dataObj['ordem'] = $ordemOBJ;
                $dataObj['objeto_id'] = $objeto;

                $this->missaoetapaobjeto_model->insert_etapaobjetos($etapa_ID, $dataObj);
                $ordemOBJ++;
            }
        }

        #EQUIPES
        $equipes = $this->input->post('equipesMissoes');

        if (!empty($equipes)) {
            foreach ($equipes as $equipe) {

                $this->equipemissoes_model->insert_equipemissao($missaoID, $equipe);
            }
        }

        #JOGADORES
        $jogadores = $this->input->post('jogadoresMissoes');

        if (!empty($jogadores)) {

            foreach ($jogadores as $jogadorID) {

                $this->jogadormissoes_model->insert_jogadormissao($missaoID, $jogadorID);
            }
        }

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('Missoes/listaMissoes', 'refresh');
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */             //MUDA STATUS DA TELA CADASTRAR MISSOES
    public function mudaStatusCadastrarmissoes() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('equipestab', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

//MUDA STATUS DA TELA CADASTRAR MISSOES

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusMissoes() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('missoes', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     * 
     */
    public function deleteMissoes() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('missoes', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

}
