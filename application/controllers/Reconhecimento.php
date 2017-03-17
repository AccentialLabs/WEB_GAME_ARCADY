<?php

//PODEMOS UTILIZAR ESSA TELA COMO EXEMPLO POIS AQUI ESTA EXECUTANDO DUAS TABELAS

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Reconhecimento extends CI_Controller {

    //put your code here

    /* acrescentamos o construct como primero passo */
    public function __construct() {
        parent::__construct();
        $this->load->model('reconhecimento_model');
        $this->load->model('tiporeconhecimento_model');
        $this->load->model('filtrareconhecimento_model');
        $this->load->model('acoestable_model');
        $this->load->model('acoes_model');
        $this->load->model('missoes_model');
        $this->load->model('programas_model');
        $this->load->model('categoriatiporeconhecimento_model');

        $this->load->model('reconhecimentoacoes_model');
        $this->load->model('reconhecimentomissoes_model');
        $this->load->model('reconhecimentoprogramas_model');
        $this->load->model('reconhecimentomodpack_model');
        $this->load->model('modpack_model');

        $this->load->helper('url_helper');
    }

    /* Fim do construct */

    public function cadastrarConquista() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /* tela padrão cabeçalho e rodapé */

        $data['tiporeconhecimento'] = $this->tiporeconhecimento_model->get_tiporeconhecimento();
        $data['acoestable'] = $this->acoes_model->get_acoes();
        $data['missoes'] = $this->missoes_model->get_missoes();
        $data['programas'] = $this->programas_model->get_programas();
        $data['tiposReconhecimento'] = $this->categoriatiporeconhecimento_model->get_categorias_tipo_reconhecimento();
         $data['mods'] = $this->modpack_model->get_modpacks();
        
        $this->load->view('templates/gaming_default');
        $this->load->view('reconhecimento/cadastrarConquista', $data);
    }

    public function reconhecimentoConquista() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /* tela padrão cabeçalho e rodapé */

        //nesse codigo só precisei colocar a (model do reconhecimento) para mostrar a tabela ma tela.
        $data['reconhecimento'] = $this->reconhecimento_model->get_tiporeconhecimento();

        $this->load->view('templates/gaming_default');
        $this->load->view('reconhecimento/reconhecimentoConquista', $data);
    }

    public function createConquista() {
             
        $id = $this->tiporeconhecimento_model->insert_tiporeconhecimento();

        $acoes = $this->input->post('objsAcoes');

        $modoafericao = $this->input->post('modoafericao');

        #verificamos o mode de afericao
        $data = '';
        $data['reconhecimento_id'] = $id;
        switch ($modoafericao) {
            case "Por Pontos":
                echo "é Por Pontos";
                break;

            case "Por Ações":
                if (!empty($acoes)) {
                    foreach ($acoes as $acao) {
                        $data = '';

                        $data['acao_id'] = $acao;
                        $data['reconhecimento_id'] = $id;

                        $this->reconhecimentoacoes_model->insert_reconhecimentos_acoes($data);
                    }
                }
                break;

            case "Por Missão":
                $data['missao_id'] = $this->input->post('afericao_missao');
                $this->reconhecimentomissoes_model->insert_reconhecimentos_missoes($data);
                break;

            case "Por Programa":
                 $data['programa_id'] = $this->input->post('afericao_programa');
                $this->reconhecimentoprogramas_model->insert_reconhecimentos_programa($data);
                break;

            case "Por Por MOD/PACK":
                $data['modpack_id'] = $this->input->post('afericao_modpack');
                $this->reconhecimentomodpack_model->insert_reconhecimentos_modpack($data);
                break;
        }

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('reconhecimento/reconhecimentoConquista', 'refresh'); 
    }

    public function createFiltrareconhecimmento() {
        $this->filtrareconhecimento_model->insert_filtrareconhecimento();

        echo "sucesso"; //codigo apenas para mostrar na tela Reconhecimento/conquista a partede opções de filtrar
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */                      //muda status da tela cadastrar conquista.
    public function mudaStatusCadastrarconquista() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('acoestable', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

//FIM, muda status da tela cadastrar conquista.

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusReconhecimento() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('reconhecimento', $data)) {
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
    public function deleteTipoReconhecimento() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('tiporeconhecimento', $data)) {
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
    public function mudaStatusTipoReconhecimento() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('tiporeconhecimento', $data)) {
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
    public function deleteReconhecimento() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('reconhecimento', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

}
