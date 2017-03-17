<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Objetos extends CI_Controller {

    //put your code here

    /* acrescentamos o construct como primero passo */
    public function __construct() {
        parent::__construct();
        $this->load->model('objetos_model');
        $this->load->model('cadastraobjetos_model');
        $this->load->model('respostasobjeto_model');
        $this->load->model('tipoobjeto_model');
        $this->load->helper('url_helper');
    }

    /* Fim do construct */

    public function listaObjetos() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /* tela padrão cabeçalho e rodapé */

        $data['obj'] = $this->objetos_model->get_objetos();  //codigo para a tabela da tela (listaObjetos)
        $data['tiposobjeto'] = $this->tipoobjeto_model->get_tipoobjetos();

        $this->load->view('templates/gaming_default');
        $this->load->view('objetos/listaObjetos', $data);
    }

    public function cadastrarObjetos() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */

        $data['cadastraobjetos'] = $this->cadastraobjetos_model->get_cadastraobjetos();
        $data['tiposobjeto'] = $this->tipoobjeto_model->get_tipoobjetos();

        $this->load->view('templates/gaming_default');
        $this->load->view('objetos/cadastrarObjetos', $data);
    }

    public function createObjetos() {
        $this->cadastraobjetos_model->insert_cadastraobjetos();
        echo "sucesso";
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusObjetos() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('objetos', $data)) {
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
     */
    public function deleteObjetos() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('objetos', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    public function cadObjeto() {

        $respostas = $this->input->post('respostas');

        $data  = $this->objetos_model->insert_objetos();
        
        print_r($data);
        
         foreach ($respostas as $resposta) {

            $resposta['status'] = 1;
            $resposta['objeto_id'] = $data;

            $this->respostasobjeto_model->insert_respostaobjeto($resposta);
        } 
        
         $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('objetos/cadastrarObjetos', 'refresh');

    }

}
