<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*Primeiramente abrimos a controller que é essa , e depois a model Equipes para vermos o que tem nela e declarar nessa tela*/


class Equipes extends CI_Controller {

    /*acrescentamos o construct como primero passo*/
     public function __construct() {
        parent::__construct();
        $this->load->model('equipes_model');
        $this->load->model('equipestab_model');
         $this->load->model('usuariotb_model');
         $this->load->model('modpack_model');
         
        $this->load->helper('url_helper');
    }
    /*Fim do construct*/
    
    public function cadastrarEquipes(){ 
        
        /*tela padrão cabeçalho e rodapé*/
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /*tela padrão cabeçalho e rodapé*/
        
        $data['equipes'] = $this->equipes_model->get_equipes();
        $data['usuariotb'] = $this->usuariotb_model->get_usuariotb(); //tabela //codigo dos dados da tela
        $data['modpacks'] = $this->modpack_model->get_modpacks();
       
         $this->load->view('templates/gaming_default');
         $this->load->view('equipes/cadastrarEquipes',$data);
        
        //Comentario  
    } 
    
     public function listaEquipes(){ 
     /*tela padrão cabeçalho e rodapé*/
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        /*tela padrão cabeçalho e rodapé*/
        
     $data['equipes'] = $this->equipes_model->get_equipes(); /*como segunda coisa a se fazer nessa tela se acrenta nessa linha mudando o nome *equipes**/
     $data['equipestab'] = $this->equipestab_model->get_equipestab(); 
      
        $this->load->view('templates/gaming_default');
        $this->load->view('equipes/listaEquipes',$data); /*fazendo a parte final desta pagina acrescentamos o ,$data*/
    }  
    
       public function createEquipes() {
        $this->equipes_model->insert_equipes();
        $this->load->library('session');
        
        $prefix = "";
        $msg = "";
        $tema = 0;
        if($this->input->post('aleatorio') == 1){
            
            $quantidade = $this->input->post('aleatorio_qtd_equipe');
            $prefix = $this->input->post('aleatorio_prefix_nome');
            $tema = $this->input->post('temaequipe');
            $name = '';
            
            $contador = 0;
            for($cont = 0; $cont< $quantidade; $cont++){
                $name = $prefix.'-'.$this->generateRandomString(5);
                $this->equipes_model->insert_equipe_random_name($name, $prefix, $tema);
            }
           
             $this->session->set_flashdata("cadSucesso", "Equipes cadastradas com sucesso!!");    
        }else{
            
            $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");     
            
        }
        
        
        redirect('Equipes/cadastrarEquipes', 'refresh');
    }
    
            /* Aqui muda o status da tela CADASTRAR EQUIPES*/
     /** 
 * Status:
 * 0 - INATIVO
 * 1 - ATIVO
 * 2 - EXCLUIDO
 */
public function mudaStatusEquipes2() {

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
       /*fIM DO CÓDIGO que muda o status da tela CADASTRAR EQUIPES*/
    
 /**
 * Status:
 * 0 - INATIVO
 * 1 - ATIVO
 * 2 - EXCLUIDO
 */
public function mudaStatusEquipes() {

    $statusAtual = $this->input->post('statusAtual');

    $data = '';
    if ($statusAtual == 0) {
        $data['status'] = 1;
    } else {
        $data['status'] = 0;
    }

    $this->db->where('id', $this->input->post('id'));

    if ($this->db->update('equipes', $data)) {
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
    public function deleteEquipes() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('equipes', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }
    
    /**
     * Restorna String aleatoria com 5 caracteres
     * @param type $length
     * @return string
     */
    function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
}
