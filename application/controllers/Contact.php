<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Layout {
	
	public function index()
	{
		// $this->load->view('layout/index');
		$this->_data['main_content'] = $this->load->view('contact/index', [], TRUE);
		$this->render();
	}
}
