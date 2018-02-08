<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnicas extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Técnicas | Quadro de técnicas';

		$this->load->view('header', $data);
		$this->load->view('tecnicas');
		$this->load->view('footer');
	}
}