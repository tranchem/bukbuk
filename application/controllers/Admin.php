<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends LayoutAdmin {
	
	public function index()
	{
		// $this->load->view('layout/index');
		$this->_data['main_content'] = $this->load->view('admin/dashboard/index', [], TRUE);
		$this->render();
	}

    public function menu()
	{
		// $this->load->view('layout/index');
		$this->_data['main_content'] = $this->load->view('admin/menu/index', [], TRUE);
		$this->render();
	}
}
