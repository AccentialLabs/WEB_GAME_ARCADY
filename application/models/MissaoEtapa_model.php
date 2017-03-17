<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MissaoEtapa_model
 *
 * @author user
 */
class MissaoEtapa_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_missaoetapa($missao_id = 0, $etapa) {
        $this->load->helper('url');

        $data = array(
            'missao_id' => $missao_id,
            'dicatela' => $etapa['dicatela'],
            'imagem' => '',
            'datalimite' => $etapa['datalimite'],
            'horalimite' => $etapa['horalimite'],
            'mensagemparabens' => $etapa['mensagemparabens'],
            'conteudodestravado' => ''
        );

        $this->db->insert('missaoetapas', $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

}

