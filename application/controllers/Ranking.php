<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ranking
 *
 * @author user
 */
class Ranking extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->model('empresa_model');
        $this->load->model('ranking_model');
        $this->load->model('jogador_model');
        $this->load->model('rankingposicoes_model');

        $this->load->helper('url_helper');
    }

    /**
     * Função deve estar em uma Cron, onde será executada a cada 5 minutos
     * A função deve organizar a lista de ranking dos jogados por pontos,
     * guardando suas respectivas posições
     * 
     */
    public function atualizaClassificacao() {

        $rankingPerPontos = $this->ranking_model->get_ranking();
        $rankingPerPosition = $this->rankingposicoes_model->get_rankingPosicoes();

        $novaListaParaAtualizar = null;

        $contador = 0;
        foreach ($rankingPerPontos as $rkng) {

            $novaListaParaAtualizar[$contador]['jogador_id'] = $rkng['jogador_id'];
            $novaListaParaAtualizar[$contador]['pontos'] = $rkng['pontos'];
            $novaListaParaAtualizar[$contador]['posicao_atual'] = $contador + 1;
            $novaListaParaAtualizar[$contador]['posicao_anterior'] = 0;
            //Vemos se usuário já está cadastrado na lista de ranking por posicao
            //caso esteja, recuramos a posicao anterior do mesmo
            foreach ($rankingPerPosition as $perPosition) {



                if ($perPosition['jogador_id'] == $rkng['jogador_id']) {

                    $novaListaParaAtualizar[$contador]['posicao_anterior'] = $perPosition['posicao_atual'];
                }
            }

            $contador++;
        }

        // echo "<br/><br/>";
        //print_r($rankingPerPosition);

        /**
         * Incluindo e Editando posicoes na tabela Ranking Posicoes
         */
        foreach ($novaListaParaAtualizar as $posicao) {
            $isValid = false;

            /*
             * Caso registro do usuário já exista, 
             * então editamos
             */
            foreach ($rankingPerPosition as $ranking) {
                if ($ranking['jogador_id'] == $posicao['jogador_id']) {
                    $isValid = true;

                    //editando registro existente
                    $data = '';
                    $data['pontos'] = $posicao['pontos'];
                    $data['posicao_atual'] = $posicao['posicao_atual'];
                    $data['posicao_anterior'] = $posicao['posicao_anterior'];


                    $this->db->where('id', $ranking['rankingID']);

                    if ($this->db->update('ranking_posicoes', $data)) {
                        // echo "sucesso<br/>";
                    } else {
                        //echo "error";
                    }
                }
            }

            /**
             * Caso não exista,
             * então criamos 
             */
            if ($isValid == false) {
                $this->rankingposicoes_model->insert_ranking_por_jogador($posicao['jogador_id'], $posicao['posicao_atual'], $posicao['posicao_anterior'], $posicao['pontos']);
            }
        }
    }

}
