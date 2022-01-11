<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function __construct(){
        $this->load->database();
    }
	
    public function cadastro(){
        $this->load->view('cadastro');
    } 

    function criarCadastro(){
        $texto = array (
            'texto'=> $this->input->post('texto'),
            'autor'=> $this->input->post('autor'),
            'tags'=> $this->input->post('tags')
        );
        $this->db->insert('projetophp', $texto);
    }

    function mostrar(){
        $query= $this->db->query('SELECT * FROM projetophp');
        return $query->result();
    }

    function quote(){
        
        include('simple_html_dom.php');
        $html = file_get_html("https://quotes.toscrape.com/");
        foreach($html->find('.quote') as $article) {
            $texto = $article->find('span[class="text"]', 0)->plaintext;
            $autor = $article->find('small[class="author"]', 0)->plaintext;
            $tags = $article->find('div[class="tags"]', 0)->plaintext;
            $tags = preg_replace('/\s+/','  ', $tags);

            $texto1 = array (
                'texto'=> $texto,
                'autor'=> $autor,
                'tags'=> $tags
            );

        $this->db->insert('projetophp', $texto1);

    }

    function destroy($id){
        $this->db->where("id", $id , 0); 
        return $this->db->delete('projetophp'); 
    }

}
}