<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModpackFacefactsObjetos_model
 *
 * @author user
 */
class ModpackFacefactsObjetos_model extends CI_Model {

    //put your code here
    public function __construct() {
        $this->load->database();
    }

    public function insert_facefactsobj($modpackID = 0, $dados) {
        $this->load->helper('url');

        $data = array(
            'modpack_minigamefacefacts_id' => $modpackID,
            'dicatela' => $dados['dicatela'],
            'permiteusuariopraticar_qtd' => $dados['permiteusuariopraticar_qtd'],
            'tipoliberacomponentes' => $dados['tipoliberacomponentes'],
            'apresentacomponentesalfabeticamente' => $dados['apresentacomponentesalfabeticamente'] ? $dados['apresentacomponentesalfabeticamente'] : 0,
            'liberacomponentes_qtd' => $dados['liberacomponentes_qtd'],
            'aprovacaopontos' => $dados['aprovacaopontos'],
            'mensagem' => $dados['mensagem'],
            'vidastotais' => $dados['vidastotais'],
            'perdeavida_respostaserradas_qtd' => $dados['perdeavida_respostaserradas_qtd'],
            'ganhavida_respostascertas_qtd' => $dados['ganhavida_respostascertas_qtd'],
        );

        $this->db->insert('modpack_minigamesfacefacts_objetos', $data);

        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

}
