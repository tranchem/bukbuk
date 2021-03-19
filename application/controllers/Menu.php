<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends Layout {
	
	public function index()
	{
		// $this->load->view('layout/index');
		$this->_data['main_content'] = $this->load->view('menu/index', [], TRUE);
		$this->render();
	}
}
