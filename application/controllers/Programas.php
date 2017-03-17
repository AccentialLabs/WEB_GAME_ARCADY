<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Programas extends CI_Controller {

    //put your code here

    /* acrescentamos o construct como primero passo */
    public function __construct() {
        parent::__construct();
        $this->load->model('programas_model');  //model das tabelas programa e telas("Arg programas" e "cadastrar programas");
        $this->load->model('objetos_model'); //model e tabela ojetos que contém a pagina ->cadastrar programas por conta da tabela;
        $this->load->model('equipestab_model');
        $this->load->model('equipes_model');
        $this->load->model('desafio_model');
        $this->load->model('premio_model');
        $this->load->model('programarodadas_model');
        $this->load->model('programarodadaobjetos_model');
        $this->load->model('tipoobjeto_model');
        $this->load->model('funcionario_model');
        $this->load->model('facilitadores_model');
        $this->load->model('jogadorprograma_model');
        $this->load->model('premioprograma_model');
        $this->load->model('personagemprograma_model');
        $this->load->model('usuariogestor_model');
        $this->load->model('desafioobjeto_model');
        $this->load->model('jogadordesafios_model');

        $this->load->helper('url_helper');
    }

    /* Fim do construct */

    public function argProgramas() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /* tela padrão cabeçalho e rodapé */

        $data['programas'] = $this->programas_model->get_programas();

        $this->load->view('templates/gaming_default');
        $this->load->view('programas/argProgramas', $data);
    }

    public function cadastrarDesafio() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        $data['equipes'] = $this->equipes_model->get_equipes();
        /* tela padrão cabeçalho e rodapé */

        $data['desafio'] = $this->desafio_model->get_desafio(); //tela
        $data['equipestab'] = $this->equipestab_model->get_equipestab(); //tabelas
        $data['objetos'] = $this->objetos_model->get_objetos(); //tabelas
        $data['jogadores'] = $this->funcionario_model->get_funcionario();

        $this->load->view('templates/gaming_default');
        $this->load->view('programas/cadastrarDesafio', $data);
    }

    public function cadastrarProgramas() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /* tela padrão cabeçalho e rodapé */

        $data['objetos'] = $this->objetos_model->get_objetos();
        $data['programas'] = $this->programas_model->get_programas();
        $data['premios'] = $this->premio_model->get_premio();  //linha de código da tabela
        $data['tiposobjeto'] = $this->tipoobjeto_model->get_tipoobjetos();
        $data['equipes'] = $this->equipes_model->get_equipes();
        $data['jogadores'] = $this->funcionario_model->get_funcionario();
        $data['facilitadores'] = $this->facilitadores_model->get_facilitadores();
        $data['gestores'] = $this->usuariogestor_model->get_usuariosgestores();

        $this->load->view('templates/gaming_default');
        $this->load->view('programas/cadastrarProgramas', $data);
    }

    //declaração do codigo do (cadastrarprogramas.js)
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

    public function createDesafio() {
        $desafio_id = $this->desafio_model->insert_desafio();
        //$data = $this->input->post('equipesDesafios');

        $data = $this->input->post();
        $objetos = $data['objetosDesafio'];

        foreach ($objetos as $objeto) {

            $this->desafioobjeto_model->insert_etapaobjetos($desafio_id, $objeto);
        }


        /**
         * Caso o desafio seja setado como
         */
         $funcionarios = $this->funcionario_model->get_funcionario();
        if ($data['desafiantetodos'] == 1) {
            
            foreach ($funcionarios as $funcionario) {

                $desafiante = $data['selecfuncionario'] ? $data['selecfuncionario'] : 0;
                $this->jogadordesafios_model->insert_jogadordesafioWithDesafiante($desafio_id, $funcionario['id'], $desafiante);
                
            }
        }

        print_r($data);
        echo "<br/><br/><br/>";
        print_r($funcionarios);
        //echo "sucesso";  
    }

    //MUDANÇA DE STATUS DA TELA CADASTRAR DESAFIO (TABELA 1 E 2)
    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusProgramas1() {

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

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusProgramas2() {

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

//FIM MUDANÇA DE STATUS DA TELA CADASTRAR DESAFIO (TABELA 1 E 2)

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusProgramas() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('programas', $data)) {
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
    public function deleteProgramas() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('programas', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

}
