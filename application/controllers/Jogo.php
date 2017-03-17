<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jogo
 *
 * @author user
 */
class Jogo extends CI_Controller {

    //put your code here

    /* acrescentamos o construct como primero passo */
    public function __construct() {
        parent::__construct();
        $this->load->model('ranking_model');
        $this->load->model('rankingposicoes_model');
        $this->load->model('jogador_model');
        $this->load->model('jogos_model');
        $this->load->model('tipoobjeto_model');
        $this->load->model('funcionario_model');
        $this->load->model('jogadoracao_model');
        $this->load->model('objetos_model');
        $this->load->model('equipestab_model');
        $this->load->model('objetosacoes_model');
        $this->load->model('equipesacoes_model');
        $this->load->model('categoriatb_model');
        $this->load->model('acoes_model'); //esse  codigo é da tela  (cadastrar acao)
        $this->load->model('equipes_model'); //esse  codigo é da tela  (cadastrar acao)
        $this->load->model('acoestable_model'); //esse codigo é da tabela
        $this->load->model('periodofiltra_model'); //codigo da tela acoes é a parte da filtragem!.
        $this->load->model('modpack_model');
        $this->load->model('jogadorjogo_model');
        $this->load->model('desafio_model');
        $this->load->model('desafioobjeto_model');
        $this->load->model('equipedesafios_model');
        $this->load->model('missoes_model');
        $this->load->model('missaoetapa_model');
        $this->load->model('jogadormissoes_model');
        $this->load->model('equipemissoes_model');
        $this->load->model('missaoetapaobjeto_model');
        $this->load->model('missoestab_model');
        $this->load->model('programas_model');
        $this->load->model('programarodadas_model');
        $this->load->model('programarodadaobjetos_model');
        $this->load->model('jogadorprograma_model');
        $this->load->model('jogadorprograma_model');
        $this->load->model('premio_model');
        $this->load->model('personagemprograma_model');
        $this->load->model('tipopremio_model');

        $this->load->helper('url_helper');
    }

    /* Fim do construct */

    public function cadastro() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');

        $data['jogos'] = $this->jogos_model->get_jogos();
        $data['objetos'] = $this->objetos_model->get_objetos();
        $data['objetosDesafio'] = $this->objetos_model->get_objetos();
        $data['objetosPrograma'] = $this->objetos_model->get_objetos();
        $data['equipestab'] = $this->equipestab_model->get_equipestab();
        $data['equipes'] = $this->equipes_model->get_equipes();
        $data['acoes'] = $this->acoes_model->get_acoes();
        $data['categorias'] = $this->categoriatb_model->get_categoriatb();
        $data['jogadores'] = $this->funcionario_model->get_funcionario();
        $data['mods'] = $this->modpack_model->get_modpacks();
        $data['acoestable'] = $this->acoes_model->get_acoes();

        $data['todosJogadores'] = $this->funcionario_model->get_funcionario();

        $data['tiposobjeto'] = $this->tipoobjeto_model->get_tipoobjetos();
        $data['tipospremio'] = $this->tipopremio_model->get_tipopremio();


        if (!empty($this->session->userdata('atualJogoCad_ID'))) {
            $data['premios_jogo'] = $this->premio_model->get_premio_PORJOGOS($this->session->userdata('atualJogoCad_ID'));
        }

        $this->load->view('templates/gaming_default_cadastro');
        $this->load->view('jogo/cadastro', $data);
    }

    public function carregaPremiosDinamicamente() {
        $this->load->library('session');

        /**
         * O ID do jogo será gravado na sessão quando criamos o mesmo   
         */
        $jogo_id = $this->session->userdata('atualJogoCad_ID');

        $premios = $this->premio_model->get_premio_PORJOGOS($jogo_id);
        print_r($premios);
    }

    public function cadastroSIMPLESNovoJogo() {

        $jogo['nome'] = $this->input->post('nome');
        $jogo['usuario_responsavel_nome'] = $this->input->post('usuario_responsavel_nome');
        $jogo['orientacoes'] = $this->input->post('orientacoes');
        $jogo['regras'] = $this->input->post('regras');

        /*
         * Editar entradas posteriormente
         */
        $jogo['usuario_responsavel_empresa_id'] = '1234';
        $jogo['usuario_responsavel_email'] = 'example@example.com';
        $jogo['logo'] = 'somelocal/logo.png';

        $retorno = $this->jogos_model->insert_jogo($jogo);

        $this->load->library('session');

        $this->session->set_userdata(array(
            'atualJogoCad_ID' => $retorno));

        $this->session->set_userdata(array(
            'atualJogoCad_NOME' => $jogo['nome']));

        $retorno_JOGO_CADASTRADO = $this->jogos_model->get_jogos($retorno);

        $this->session->set_userdata(array(
            'atualJogoCad_JOGO' => $retorno_JOGO_CADASTRADO));

        echo $retorno;
    }

    public function cadastroJogadoresJogo() {
        $this->load->library('session');

        $jogadores = $this->input->post('arrayJogadores');
        $jogadores = json_decode(stripslashes($jogadores));

        /**
         * O ID do jogo será gravado na sessão quando criamos o mesmo   
         */
        $jogo_id = $this->session->userdata('atualJogoCad_ID');

        foreach ($jogadores as $jogador) {
            $dados['jogador_id'] = $jogador;
            $dados['jogo_id'] = $jogo_id;

            $this->jogadorjogo_model->insert_jogador_jogo($dados);
        }

        echo "sucesso";
    }

    /**
     * Função usada para cadastrar os desafios
     * 
     * AJUSTES: 
     *  Ajustar amarração de equipes ao desafio
     */
    public function createDesafio() {
        $this->load->library('session');
        $jogo_id = $this->session->userdata('atualJogoCad_ID');

        $desafio_id = $this->desafio_model->insert_desafio_porJogo($jogo_id);
        //$data = $this->input->post('equipesDesafios');

        $data = $this->input->post();
        $objetos = $data['objetosDesafio'];

        foreach ($objetos as $objeto) {
            $this->desafioobjeto_model->insert_etapaobjetos($desafio_id, $objeto);
        }

        /**
         * Caso o desafio seja setado como desafiante
         */
        $funcionarios = $this->funcionario_model->get_funcionario();
        if ($data['desafiantetodos'] == 1) {

            foreach ($funcionarios as $funcionario) {

                $desafiante = $data['selecfuncionario'] ? $data['selecfuncionario'] : 0;
                $this->jogadordesafios_model->insert_jogadordesafioWithDesafiante($desafio_id, $funcionario['id'], $desafiante);
            }
        }

        /**
         * Colocar listagem para atribuição do desafio para equipes
         */
        if (!empty($data['equipesDesafios'])) {
            $equipes = $data['equipesDesafios'];

            foreach ($equipes as $equipe) {
                $this->equipedesafios_model->insert_equipedesafio(21, $equipe);
            }
        }

        var_dump($data);
    }

    /**
     * Action para o form no cadastro de interações
     */
    public function createMissao() {
        $this->load->library('session');
        $jogo_id = $this->session->userdata('atualJogoCad_ID');
        #salvando missão
        // $missaoID = $this->missoes_model->insert_missoes();
        $missaoID = $this->missoes_model->insert_missoes_porMissao($jogo_id);

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

    public function createAcao() {

        $this->load->library('session');
        $jogo_id = $this->session->userdata('atualJogoCad_ID');

        //$id = $this->acoes_model->insert_acoes();
        $id = $this->acoes_model->insert_acoes_porJogo($jogo_id = 0);
        $this->periodofiltra_model->insert_periodofiltra();

        /**
         * incluindo objetos
         */
        $objs = $this->input->post('objsAcoes');

        if (!empty($objs)) {
            foreach ($objs as $obj) {
                $dadosObjsAcoes = '';

                $dadosObjsAcoes['acao_id'] = $id;
                $dadosObjsAcoes['objeto_id'] = $obj;

                $this->objetosacoes_model->insert_objetos_acoes($dadosObjsAcoes);
            }
        }
        /**
         * incluindo equipes
         */
        $equipes = $this->input->post('equipesAcoes');

        if (!empty($equipes)) {
            foreach ($equipes as $equipe) {
                $dadosObjsAcoes = '';

                $dadosObjsAcoes['acao_id'] = $id;
                $dadosObjsAcoes['equipe_id'] = $equipe;

                $this->equipesacoes_model->insert_equipes_acoes($dadosObjsAcoes);
            }
        }

        $jogadoresDasEquipes = '';
        $contadorJDE = 0;
        foreach ($equipes as $equipe) {

            $jogs = $this->equipesacoes_model->get_jogadores_por_equipe($equipe);
            if (!empty($jogs)) {
                $jogadoresDasEquipes[$contadorJDE] = $jogs;
                $contadorJDE++;
            }
        }

        if (!empty($jogadoresDasEquipes)) {
            foreach ($jogadoresDasEquipes as $jog) {
                $this->jogadoracao_model->insert_jogadoracao($id, $jog['jogador_id']);
            }
        }

        /**
         * incluindo jogadores
         */
        $jogadores = $this->input->post('jogadoresAcoes');

        if (!empty($jogadores)) {

            foreach ($jogadores as $jogadorID) {

                $this->jogadoracao_model->insert_jogadoracao($id, $jogadorID);
            }
        }
        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('Acoes/cadastrarAcoes', 'refresh');
    }

    /**
     * 
     */
    public function createPrograma() {
        $programaID = '';
        $rodadaID = '';
        $personagens = '';
        $programaID = $this->programas_model->insert_programas();
        $data = $this->input->post();


        $rodadas = $data['data']['Rodada'];
        print_r($rodadas);
        $myData = '';
        if (!empty($rodadas)) {

            foreach ($rodadas as $rodada) {

                $myData['objetivo'] = $rodada['objetivo'];
                $myData['pistadica'] = $rodada['pistaDica'];
                $myData['temposegundos'] = $rodada['tempo'];
                $myData['mensagemparabens'] = $rodada['mensagemParabens'];

                $rodadaID = $this->programarodadas_model->insert_programarodada($programaID, $myData);

                foreach ($rodada['objetos'] as $obj) {
                    $this->programarodadaobjetos_model->insert_programarodadaobjeto($rodadaID, $obj);
                }
            }
        }

        //SALVA PARTICIPANTES
        if (isset($data['jogadoresParticipantes'])) {
            $jogadoresParticipantes = $data['jogadoresParticipantes'];

            $myData = '';
            if (!empty($jogadoresParticipantes)) {
                foreach ($jogadoresParticipantes as $participante) {
                    $myData['jogador_id'] = $participante;

                    $this->jogadorprograma_model->insert_jogadorprograma($programaID, $myData);
                }
            }
        }


        $myData = '';
        //SALVA PERSONAGENS
        if (isset($data['data']['Personagens'])) {
            $personagens = $data['data']['Personagens'];

            foreach ($personagens as $personagem) {
                $data['nome'] = $personagem['nome'];
                $data['quantidademaxima'] = $personagem['quantidade'];
                $this->personagemprograma_model->insert_personagemprograma($programaID, $data);
            }
        }

        $premioID = $data['selecionepremio'];
        if ($premioID != 0) {
            $this->premioprograma_model->insert_premioprograma($programaID, $premioID);
        }

        /*
          $qtdJogadoresTotal = count($jogadoresParticipantes);

          echo "TOTAL: " . $qtdJogadoresTotal;
          echo "<br/> RAIZ: " . sqrt($qtdJogadoresTotal); */

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('Programas/argProgramas', 'refresh');
    }

    public function pauseJogo() {

        $data['status'] = 0;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('jogos', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    public function stopJogo() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('jogos', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    public function playJogo() {

        $data['status'] = 1;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('jogos', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    public function configuraJogo() {
        $this->load->library('session');
        $retorno = $this->jogos_model->get_jogos($this->input->post('id'));

        $this->session->set_userdata(array(
            'atualJogoCad_ID' => $retorno['id']));

        $this->session->set_userdata(array(
            'atualJogoCad_NOME' => $retorno['nome']));

        $this->session->set_userdata(array(
            'atualJogoCad_JOGO' => $retorno));


        $jogadores = $this->jogadorjogo_model->get_jogodoresPorJOGO($this->input->post('id'));

        print_r($jogadores);
    }

    public function cadastrarPremio() {

        $this->load->library('session');
        $jogo_id = $this->session->userdata('atualJogoCad_ID');

        //$this->premio_model->insert_premio();
        //$datad = $this->session->userdata('atualJogoCad_PREMIOS');
        //contador = count($datad+1);
        // $datad[$jogo_id]['premios'][$contador] = $this->input->post();
        //   $this->session->set_userdata(array(
        //'atualJogoCad_PREMIOS' => json_encode($datad)));

        $premio_id = $this->premio_model->insert_premio_PORJOGO($jogo_id);

        echo $premio_id;
    }

    public function pausePremio() {

        $data['status'] = 0;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('premio', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    public function playPremio() {

        $data['status'] = 1;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('premio', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    public function trashPremio() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('premio', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    public function buscaPremiosCadastrados_PORJOGO() {

        $this->load->library('session');
        $jogo_id = $this->session->userdata('atualJogoCad_ID');

        $premios = $this->premio_model->get_premio_PORJOGOS($jogo_id);
        
        $trs = '';
        
        if(!empty($premios)){
            foreach($premios as $premio){
                $trs .= '<tr><td><h4>'.$premio["nome"].'</h4></td><td><small>'.$premio["premioDescricao"].'</small></td><td><input type="radio" id="'.$premio["premioId"].'"/> </td></tr>';
            }
        }
        
        $table = "<table class='table table-sorter'>"
                . "<tr>"
                . "<th class='text-center'>Nome</th>"
                . "<th class='text-center'>Descrição</th>"
                . "<th></th>"
                . "</tr>"
                . $trs
                . "</table>";
        
        print_r($table);
    }

}
