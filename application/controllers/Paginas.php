<?php
 class Paginas extends CI_Controller{

 	public function view($pagina = 'inicio'){
 		if(!file_exists(APPPATH.'views/paginas/'.$pagina.'.php')){
 			show_404();
 		}

 		$data['title'] = ucfirst($pagina);

 		$this->load->view('templates/header');
 		$this->load->view('paginas/'.$pagina, $data);
 		$this->load->view('templates/footer');
 	}
 }