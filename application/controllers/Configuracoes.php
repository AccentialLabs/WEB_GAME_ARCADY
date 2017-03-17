<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Configuracoes extends CI_Controller {
    /* acrescentamos o construct como primero passo */

    public function __construct() {

        parent::__construct();
        $this->load->model('premio_model');
        $this->load->model('categoriatb_model');
        $this->load->model('reconhecimentotb_model');
        /* $this->load->model('usuario_model'); */ /* Ao retirar essa linha de código, a tela configuracoes/cadastrar premio funciona */
        $this->load->model('conteudo_model');
        $this->load->model('objetos_model');
        $this->load->model('reconhecimento_model');
        $this->load->model('facilitadores_model');
        $this->load->model('empresa_model');
        $this->load->model('tipopremio_model');
        $this->load->model('tiporeconhecimento_model');
        $this->load->model('usuariogestor_model');
        $this->load->model('usuariotb_model');
        $this->load->model('tiporeconhecimento_model');
        //aqui comeca a inserção dos dados das redes sociais
        $this->load->model('facebookempresa_model');
        $this->load->model('redesocial_model');
        //Continuidade do Código da tela "rede social"  segue o "Twitter" e o "Instagran"  (tentativa de aparecer na tela)
        //$this->load->model('twitterempresa_model');
        //$this->load->model('instagranempresa_model');  
        $this->load->model('jogo_model');

        $this->load->model('tipoobjeto_model');

        $this->load->helper('url_helper');
    }

    /* Fim do construct */

    public function dadosEmpresa() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */

        $data['empresa'] = $this->empresa_model->get_empresa();
        $data['conteudos'] = $this->conteudo_model->get_conteudo(); /* TELA DADOS CONTEUDO */
        $data['usuarios'] = $this->usuariotb_model->get_usuariotb(); /* TELA DADOS USUARIOGESTORES */
        $data['categoriatb'] = $this->categoriatb_model->get_categoriatb(); /* TELA DADOS EMPRESA */
        $data['reconhecimento'] = $this->tiporeconhecimento_model->get_tiporeconhecimento(); /* TELA DADOS RECONHECIMENTO */
        $data['tipopremio'] = $this->tipopremio_model->get_tipopremio(); /* TELA DADOS PREMIOS */
        $data['facilitadores'] = $this->facilitadores_model->get_facilitadores(); /* TELA DADOS USUARIOFACILITADORES */

        $data['tiposobjeto'] = $this->tipoobjeto_model->get_tipoobjetos(); //CATEGORIA DE OBJETOS

        $this->load->view('templates/gaming_default');
        $this->load->view('configuracoes/dadosEmpresa', $data);
    }

    public function cadastrarRedesociais() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */


        $data['facebookempresa'] = $this->facebookempresa_model->get_facebookempresa();

        $this->load->view('templates/gaming_default');
        $this->load->view('configuracoes/cadastrarRedesociais');
    }

    public function jogo() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */


        $this->load->view('templates/gaming_default');
        $this->load->view('configuracoes/jogo');
    }

    public function usuariosGestores() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */


        $data['usuarios'] = $this->usuariotb_model->get_usuariotb(); /* retirar o comentario da construct */
        //$data['tes'] = $this->usuariogestor_model->insert_usuariogestor(7);

        $this->load->view('templates/gaming_default');
        $this->load->view('configuracoes/usuariosGestores', $data);
    }

    public function ativarOuInativarUsGestores() {

        $id = $this->input->post('id');
        return $this->usuariogestor_model->insert_usuariogestor($id);
    }

    public function conteudo() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */

        $data['conteudos'] = $this->conteudo_model->get_conteudo();

        $this->load->view('templates/gaming_default');
        $this->load->view('configuracoes/conteudo', $data);
    }

    public function categoriaObjetos() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */


        $data['categoriatb'] = $this->categoriatb_model->get_categoriatb();

        $this->load->view('templates/gaming_default');
        $this->load->view('configuracoes/categoriaObjetos', $data);
    }

    public function reconhecimento() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */

        $data['reconhecimento'] = $this->reconhecimentotb_model->get_reconhecimentotb();

        $this->load->view('templates/gaming_default');
        $this->load->view('configuracoes/reconhecimento', $data);
    }

    public function premios() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */

        $data['tipopremio'] = $this->tipopremio_model->get_tipopremio();

        $this->load->view('templates/gaming_default');
        $this->load->view('configuracoes/premios', $data);
    }

    public function usuariosFacilitadores() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */

        $data['facilitadores'] = $this->facilitadores_model->get_facilitadores();

        $this->load->view('templates/gaming_default');
        $this->load->view('configuracoes/usuariosFacilitadores', $data);
    }

    public function createPremio() { /* A tela (configurações/cadastrar premio) esta cadastrada nos (premios()),sendo essa tela de tipo-de-premios */
        /* ela devia estar na views (premio) (cadastrar-premio) */
        $this->premio_model->insert_premio();  /* Arrumando teria que mexer na viws na controller e até na model!, e levando esse trecho de código junto.! */
        echo "sucesso";
    }

    public function createEmpresa() {            //esse codigo é da tela Dados da empresa
        $this->empresa_model->insert_empresa();
        echo "sucesso";
    }

    public function createFacebook() {                //esse codigo é da tela Cadaatrar rede Sociais
        $this->facebookempresa_model->insert_facebookempresa();

        echo "sucesso";
    }

    //Continuidade do Código da tela "rede social"  segue o "Twitter" e o "Instagran"  (tentativa de aparecer na tela)
    // public function createTwitter(){
    //$this->twitterempresa_model->insert_twitterempresa(); 
    //echo "sucesso cadastro o Twitter";
    //}
    // public function createInstagran(){
    // $this->instagranempresa_model->insert_instagranempresa();
    // echo "sucesso o cadastro Instagran";
    // }

    public function createJogo() {  //codigo que mostra a tala Jogo.
        $this->jogo_model->insert_jogo();
        echo"sucesso";
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusUsuarioGestores() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('usuariotb', $data)) {
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
    public function deleteConteudo() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('conteudo', $data)) {
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
    public function mudaStatusPremios() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('tipopremio', $data)) {
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
    public function deleteTipoPremio() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('tipopremio', $data)) {
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
    public function mudaStatusUsuarioFacilitador() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('facilitadores', $data)) {
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
    public function deleteUsuarioFacilitador() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('facilitadores', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    /**
     * INSERINDO USUÁRIOS FACILITADORES
     */
    public function insertUsuarioFacilitador() {

        $this->facilitadores_model->insert_facilitadores();
        return "sucesso";
    }

    /**
     * INSERINDO TIPO PRÊMIO
     */
    public function insertTipoPremio() {

        $this->tipopremio_model->insert_tipopremio();
        return "sucesso";
    }

    /*     * STATUS:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */

    public function mudaStatusReconhecimento() { //esse cógigo faz com que não salve a ação do checkbox
        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('reconhecimentotb', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    /**
     * STATUS:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function deleteReconhecimento() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('Tiporeconhecimento', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    /**
     * INSERINDO RECONHECIMENTOTB
     */
    public function insertReconhecimentotb() {

        $this->reconhecimentotb_model->insert_reconhecimentotb();
        return "sucesso";
    }

    /**
     * CATEGORIA OBJETOS
     */
    /*     * STATUS:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */

    public function mudaStatusCategoria() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('tipoobjeto', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    /**
     * STATUS:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function DeleteCategoria() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('tipoobjeto', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    /**
     * INSERINDO CategoriaObjetos
     */
    public function insertCategoriaObjetos() {

        //$this->categoriatb_model->insert_categoriatb();
        $this->tipoobjeto_model->insert_tipoobjeto();
        return "sucesso";
    }

    public function salvarRedeSocial() {

        $this->load->library('session');
        $empresa = $this->session->userdata('empresaLogada');

        $hasFACEBOOK = $this->input->post('isFACEBOOK');
        $hasTWITTER = $this->input->post('isTWITTER');
        $hasINSTAGRAM = $this->input->post('isINSTA');


        //contador para array que será enviado
        $contador = 0;
        $socialNetArray = '';

        // caso tenha facebook
        if ($hasFACEBOOK === 'FACEBOOK') {
            $socialNetArray[$contador]['profile_url'] = $this->input->post("facebookProfile");
            $socialNetArray[$contador]['socialnetwork'] = $hasFACEBOOK;
            $socialNetArray[$contador]['empresa_id'] = $empresa['id'];
            $contador++;
        }

        // caso tenha twitter
        if ($hasTWITTER != false) {
            $socialNetArray[$contador]['profile_url'] = $this->input->post("twitterProfile");
            $socialNetArray[$contador]['socialnetwork'] = $hasTWITTER;
            $socialNetArray[$contador]['empresa_id'] = $empresa['id'];
            $contador++;
        }

        // caso tenha instagram
        if ($hasINSTAGRAM != false) {
            $socialNetArray[$contador]['profile_url'] = $this->input->post("twitterProfile");
            $socialNetArray[$contador]['socialnetwork'] = $hasINSTAGRAM;
            $socialNetArray[$contador]['empresa_id'] = $empresa['id'];
            $contador++;
        }

        $socialNetArray[$contador]['profile_url'] = "essaurlprofile";
        $socialNetArray[$contador]['socialnetwork'] = 'SOCIALNETWORK';
        $socialNetArray[$contador]['empresa_id'] = $empresa['id'];

        if (!empty($socialNetArray)) {
            foreach ($socialNetArray as $social) {
                $this->redesocial_model->insertorupdate_redesocial($social);
                echo "sucesso";
            }
        }
    }

}
