<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franchise extends Layout {
	
	public function index()
	{
		// $this->load->view('layout/index');
		$this->_data['main_content'] = $this->load->view('franchise/index', [], TRUE);
		$this->render();
	}
}
