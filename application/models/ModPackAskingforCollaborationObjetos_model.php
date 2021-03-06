<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModPackAskingforCollaborationObjetos_model
 *
 * @author user
 */
class ModPackAskingforCollaborationObjetos_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_objetos($modpack_id = 0, $dados) {
        $this->load->helper('url');

        $data = array(
            'modpack_askingforcollaboration_id' => $modpack_id,
            'dicatela' => $dados['dicatela'],
            'datainicio' => $dados['datainicio'],
            'datafim' => $dados['datafim'],
            'horainicio' => $dados['horainicio'],
            'horafim' => $dados['horafim'],
            'instrucoes' => $dados['instrucoes'],
            'regras' => $dados['regras'],
            'limitaparticipantes_qtd' => $dados['limitaparticipantes_qtd'],
            'aprovacaoobrigatoriaconteudo' => $dados['aprovacaoobrigatoriaconteudo'],
            'tiporeconhecimento' => $dados['tiporeconhecimento'],
            'qtdpontosreconhecimento' => $dados['qtdpontosreconhecimento'],
            'qtdreconhecimentoporanking' => $dados['qtdreconhecimentoporanking'],
            'reconhecimentoparticipantes' => $dados['reconhecimentoparticipantes'],
            'tiporeconhecerfuncionarios' => $dados['tiporeconhecerfuncionarios'],
            'usuariosreconhecidos_qtd' => $dados['usuariosreconhecidos_qtd'],
            'usuarioreconhecidos_acimade' => $dados['usuarioreconhecidos_acimade']
        );

        return $this->db->insert('modpack_askingforcollaboration_objetos', $data);
    }

    //put your code here
}
