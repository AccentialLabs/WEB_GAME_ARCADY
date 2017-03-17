<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe responsavel pelo gerenciamento dos MODs and PACKs
 *
 * @author user
 */
class Addon extends CI_Controller {

//put your code here

    /* acrescentamos o construct como primero passo */
    public function __construct() {
        parent::__construct();

        $this->load->model('modpackcomponents_model');
        $this->load->model('modpackcomponentsrespostas_model');
        $this->load->model('trimestremodpack_model');
        $this->load->model('modpack_model');
        $this->load->model('modpackaskingforcollaborationobjetos_model');
        $this->load->model('modpackafc_model');
        $this->load->model('modpackfacefactsobjetos_model');
        $this->load->model('modpackskillcompetenceobjetos_model');

        $this->load->helper('url_helper');
    }

    public function index() {

        $data['titulo'] = "MODs/Packs";

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $data['mods'] = $this->modpack_model->get_modpacks();

        $this->load->view('templates/gaming_default');
        $this->load->view('addon/index', $data);
    }

    public function skillCompetenceEditComponents() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/skill_competence_edit_components', $data);
    }

    public function goalPackEditComponents() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/goal_pack_edit_components', $data);
    }

    public function minigameFaceFactsEditComponents() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/minigame_face_facts_edit_components', $data);
    }

    public function sobreModpack() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/sobre_modpack', $data);
    }

    public function modpackEdit() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/modpack_edit', $data);
    }

    /**
     * 
     */
    public function editSkillCompetencePack() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');

        $data['componentes'] = $this->modpackcomponents_model->select_components_by_components_skill();

        $this->load->view('templates/gaming_default');
        $this->load->view('addon/edit_skill_competence_pack', $data);
    }

    public function editGoalPack() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/edit_goal_pack', $data);
    }

    public function editMinigameFaceFacts() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');

        $data['componentes'] = $this->modpackcomponents_model->select_components_by_face_facts();

        $this->load->view('templates/gaming_default');
        $this->load->view('addon/edit_minigame_face_facts', $data);
    }

    /**
     * Cadastra componentes para o MOD/PACK FACE FACTS
     */
    public function cadFaceFactsComponents() {

        $respostas = $this->input->post('respostas');

        $data = $this->modpackcomponents_model->insert_component_by_face_facts();
// print_r($data);

        foreach ($respostas as $resposta) {

            $resposta['status'] = 1;
            $resposta['modpackcomponent_id'] = $data;

            $this->modpackcomponentsrespostas_model->insert_resposta($resposta);
        }

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('addon/minigameFaceFactsEditComponents', 'refresh');
    }

    public function cadSkillCompetenceComponents() {

        $respostas = $this->input->post('respostas');

        $data = $this->modpackcomponents_model->insert_component_by_components_skill();

        print_r($data);

        foreach ($respostas as $resposta) {

            $resposta['status'] = 1;
            $resposta['modpackcomponent_id'] = $data;

            $this->modpackcomponentsrespostas_model->insert_resposta($resposta);
        }

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('addon/skillCompetenceEditComponents', 'refresh');
    }

    /**
     * Funçoes que serão executadas via Ajax para contatenar conteudo dinamicamente às telas
     */
    public function ajaxGoalPackAddAcordeon() {

        $data['contador'] = $respostas = $this->input->post('contador');
//$this->load->view('templates/gaming_default');
        $this->load->view('addon/ajax_goal_pack_add_acordeon', $data);
    }

    public function ajaxSkillCompetencePackAcordeon() {

        $data['componentes'] = $this->modpackcomponents_model->select_components_by_components_skill();
        $data['contador'] = $respostas = $this->input->post('contador');
//$this->load->view('templates/gaming_default');
        $this->load->view('addon/ajax_skill_competence_acordeon', $data);
    }

    public function ajaxMinigameFaceFactsAcordeon() {

        $data['componentes'] = $this->modpackcomponents_model->select_components_by_face_facts();
        $data['contador'] = $respostas = $this->input->post('contador');
//$this->load->view('templates/gaming_default');
        $this->load->view('addon/ajax_minigame_face_facts_acordeon', $data);
    }

    public function ajaxAskingCollaborationAcordeon() {

        $data['contador'] = $respostas = $this->input->post('contador');
//$this->load->view('templates/gaming_default');
        $this->load->view('addon/ajax_asking_collaboration_acordeon', $data);
    }

    /**
     * CADASTRO DOS MODS
     */
    public function cadGoalPack() {


        $id = $this->modpack_model->insert_modpack();

        $trimestres = $this->input->post('trimestre');

        foreach ($trimestres as $trimestre) {

            $trimestre['modpack_id'] = $id;
            $this->trimestremodpack_model->insert_trimestre($trimestre);
        }

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('addon/editGoalPack', 'refresh');
    }

    public function cadSkillCompetencePack() {

        $id = $this->modpack_model->insert_modpack();

        $data = $this->input->post();
        $rodadas = $data['rodadas'];

        foreach ($rodadas as $rodada) {
            $this->modpackskillcompetenceobjetos_model->insert_skillcompetenceobjeto($id, $rodada);
        }

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('addon/editSkillCompetencePack', 'refresh');
    }

    public function cadMinigamesFaceFacts() {
        $id = $this->modpack_model->insert_modpack();
        $data = $this->input->post();

        $rodadas = $data['rodada'];

        foreach ($rodadas as $rodada) {
            $this->modpackfacefactsobjetos_model->insert_facefactsobj($id, $rodada);

            print_r($rodada);
        }

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('Addon/editMinigameFaceFacts', 'refresh');
    }

    public function cadAskForCollaboration() {

        $id = 0;
        $id = $this->modpack_model->insert_modpack();
        $data = $this->input->post();

        //salvar objetos inseridos
        $objetos = $data['objetos'];
        print_r($objetos);
        foreach ($objetos as $obj) {
            $objData = '';

            $objData['dicatela'] = $obj['dica'];
            $objData['datainicio'] = $obj['dt_inicio'];
            $objData['datafim'] = $obj['dt_fim'];
            $objData['horainicio'] = $obj['hr_inicio'];
            $objData['horafim'] = $obj['hr_fim'];
            $objData['instrucoes'] = $obj['hr_fim'];
            $objData['regras'] = $obj['regras'];
            $objData['tiporeconhecimento'] = $obj['tiporeconhecimento'];
            $objData['limitaparticipantes_qtd'] = $obj['qtd_participantes_limitados'] ? $obj['qtd_participantes_limitados'] : 0;
            //$objData['aprovacaoobrigatoriaconteudo'] = $obj['aprovacao_conteudo_obrigatoria'] ? $obj['aprovacao_conteudo_obrigatoria'] : 0;
            $objData['aprovacaoobrigatoriaconteudo'] = 0;
            $objData['qtdpontosreconhecimento'] = $obj['qtd_pontos_para_reconhecimento'] ? $obj['qtd_pontos_para_reconhecimento'] : 0;
            $objData['qtdreconhecimentoporanking'] = $obj['qtd_pontuacao_ranking'] ? $obj['qtd_pontuacao_ranking'] : 0;
            $objData['reconhecimentoparticipantes'] = $obj['reconhecer_participantes'];
            $objData['usuariosreconhecidos_qtd'] = $obj['qtd_participantes_reconher'] ? $obj['qtd_participantes_reconher'] : 0;
            $objData['usuarioreconhecidos_acimade'] = $obj['reconhecer_participantes_acima_de'] ? $obj['reconhecer_participantes_acima_de'] : 0;
            $objData['tiporeconhecerfuncionarios'] = $obj['participantes_reconhecidos'];

            $this->modpackafc_model->insert_objetosAFC($id, $objData);
        }

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('Addon/modpackEdit', 'refresh');
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusMod() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('modpack', $data)) {
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
    public function deleteMod() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('modpack', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

}
