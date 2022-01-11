<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Model');
    }

	public function index()
	{
        $dados['result']= $this->Model->mostrar();
		$this->load->view('view', $dados);
	}
    public function cadastro(){
        $this->load->view('cadastro');
    }

    public function cadastrar(){
        $this->Model->criarCadastro();
        redirect("Controller");
    }
    public function quote(){
        $this->Model->quote();
        redirect("Controller");
    }
    public function delete($id){
        $this->load->model("Model");
        $this->Model->destroy($id);
        redirect("Controller");
    }
}
