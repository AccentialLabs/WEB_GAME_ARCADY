<?php

include("/../entities/JogadorReconhecimentoEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JogadorReconhecimento_model
 *
 * @author user
 */
class JogadorReconhecimento_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_jogador_reconhecimento($slug = FALSE) {
        if ($slug === FALSE) {
            //$query = $this->db->get('jogador_reconhecimentos');
             $query = $this->db->select('*,'
                     . 'funcionario.id AS funcionarioID,'
                     . 'tiporeconhecimento.id AS tiporeconhecimentoID, '
                     . 'funcionario.status AS funcionarioStatus, '
                     . 'tiporeconhecimento.status AS tiporeconhecimentoStatus')
                    ->from('jogador_reconhecimentos')
                    ->join('funcionario', 'funcionario.id = jogador_reconhecimentos.jogador_id', 'inner')
                     ->join('tiporeconhecimento', 'tiporeconhecimento.id = jogador_reconhecimentos.reconhecimento_id', 'inner')
                    ->get();
            
            return $query->result_array();
        }
        
        
        //$query = $this->db->get_where('jogador_reconhecimentos', array('id' => $slug));
        
        $query = $this->db->select('*,'
                     . 'funcionario.id AS funcionarioID,'
                     . 'tiporeconhecimento.id AS tiporeconhecimentoID, '
                     . 'funcionario.status AS funcionarioStatus, '
                     . 'tiporeconhecimento.status AS tiporeconhecimentoStatus')
                    ->from('jogador_reconhecimentos')
                    ->join('funcionario', 'funcionario.id = jogador_reconhecimentos.jogador_id', 'inner')
                     ->join('tiporeconhecimento', 'tiporeconhecimento.id = jogador_reconhecimentos.reconhecimento_id', 'inner')
                     ->where('jogador_reconhecimentos.id = '.$slug)
                    ->get();
        
        return $query->row_array();
    }
    
     public function get_jogador_reconhecimento_por_jogador($slug = FALSE) {
           
        $query = $this->db->select('*,'
                     . 'funcionario.id AS funcionarioID,'
                     . 'tiporeconhecimento.id AS tiporeconhecimentoID, '
                     . 'funcionario.status AS funcionarioStatus, '
                     . 'tiporeconhecimento.status AS tiporeconhecimentoStatus,'
                     . 'jogador_reconhecimentos.id AS jogRecID')
                    ->from('jogador_reconhecimentos')
                    ->join('funcionario', 'funcionario.id = jogador_reconhecimentos.jogador_id', 'inner')
                     ->join('tiporeconhecimento', 'tiporeconhecimento.id = jogador_reconhecimentos.reconhecimento_id', 'inner')
                     ->where('jogador_reconhecimentos.jogador_id = '.$slug)
                    ->get();
        
        return  $query->result_array();
    }

    public function insert_jogador_reconhecimento() {
        $this->load->helper('url');

        $jogRecEntity = new JogadorReconhecimentoEntity();
        $jogRecEntity->setJogador($this->input->post('jogador_id'));
        $jogRecEntity->setReconhecimento($this->input->post('reconhecimento_id'));
        $jogRecEntity->setDatacriacao(date('Y-m-d'));

        $data = array(
            'jogador_id' => $this->input->post('jogador_id'),
            'reconhecimento_id' => $this->input->post('reconhecimento_id'),
            'datacriacao' => date('Y-m-d')
        );
         return $this->db->insert('jogador_reconhecimentos', $data);
    }

}
