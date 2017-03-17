<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Jogadores extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->model('usuariotb_model'); //codigo para mostrar os dados na tabela
        $this->load->model('funcionario_model'); //codigo para mostrar os dados na tabela
        $this->load->helper('url_helper');
    }

    /* Fim do construct */

    public function index() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');

        $data['usuariotb'] = $this->funcionario_model->get_funcionario(); //codigo para mostrar os dados na tabela

        $this->load->view('templates/gaming_default'); //mudei

        $this->load->view('jogadores/jogadores', $data);
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusJogador() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('funcionario', $data)) {
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
    public function deleteUser() {
        $data['status'] = 2;
        
        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('funcionario', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    public function editarJogadorFuncionario($editJogador = null) {
        if (!empty($editJogador)) {
            $this->load->library('session');
            $this->session->set_flashdata("editJogador", $editJogador);
            redirect('Funcionario/cadastrarFuncionario', 'refresh');
        }
    }

}
