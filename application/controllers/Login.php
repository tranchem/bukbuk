<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login/index');
	}

    public function verify()
    {
        $user_name = $this->input->post('user_name');
        $password = $this->input->post('password');

        $query = $this->db->get_where('tbl_user', array('user_name' => $user_name, 'password' => $password));
        // var_dump($query->result());
        $result = $query->result();

        // echo $query->num_rows();
        // die();

        if($query->num_rows() > 0) {
            $user = array(
                'username' => $user_name,
                'name' => $result[0]->name,
                'id_user' => $result[0]->id_user
            );

            // var_dump($user);
            $this->session->set_userdata('logged_in', $user);

            redirect('admin');
        }
    }
}