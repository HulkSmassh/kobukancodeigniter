<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tubaraodojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Dojo Tubarão |  Rua Prudente de Moraes 352 - Tubarão - SC Brasil';

		for ($i=1; $i <= 1; $i++) { 
			$data['fotos'][] = 'tubarao'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('tubarao_dojo');
		$this->load->view('footer');
	}
}