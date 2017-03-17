<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModpackSkillCompetenceObjetos_model
 *
 * @author user
 */
class ModpackSkillCompetenceObjetos_model extends CI_Model {

    //put your code here
    public function __construct() {
        $this->load->database();
    }

    public function insert_skillcompetenceobjeto($modpackID = 0, $dados) {
        $this->load->helper('url');

        $today = date('Y-m-d');
        $data = array(
            'modpack_skillcompetencepak_id' => $modpackID,
            'dicatela' => $dados['dicatela'],
            'permiteusuariopraticar_qtd' => $dados['permiteusuariopraticar_qtd'],
            'aprovacaopontos' => $dados['aprovacaopontos'],
            'mensagem' => $dados['mensagem'],
            'resultado' => $dados['resultado'],
            'sumarizagrupo' => $dados['sumarizagrupo'] ? $dados['sumarizagrupo'] : 0,
            'permitecompararperformance' => $dados['permitecompararperformance'] ? $dados['permitecompararperformance'] : 0,
            'mostragraficoresumo' => $dados['mostragraficoresumo'] ? $dados['mostragraficoresumo'] : 0,
            'mostragrafico_tipografico' => $dados['mostragrafico_tipografico'] ? $dados['mostragrafico_tipografico'] : 0,
            'mostragraficoperformance_tipografico' => $dados['mostragraficoperformance_tipografico'] ? $dados['mostragraficoperformance_tipografico'] : 0,
            'motragraficocomparativoperformance' => $dados['motragraficocomparativoperformance'] ? $dados['motragraficocomparativoperformance'] : 0,
            'dataregistro' => $today
        );

        $this->db->insert('modpack_skillandcompepack_objetos', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

}
