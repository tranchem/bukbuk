<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends LayoutAdmin
{

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

	public function booking()
	{
		$this->db->select('b.id_booking, b.id_restaurant, b.time, b.amount, b.name, b.phone_number, b.email, b.status, r.name as name_restaurant');
		$this->db->from('tbl_booking b');
		$this->db->join('tbl_restaurant r', 'r.id_restaurant = b.id_restaurant');
		$query = $this->db->get();
		// $result_booking = $this->db->get('tbl_booking')->result();
		$result_booking = $query->result();

		// var_dump($result_booking[0]);
		// die();

		$this->_data['main_content'] = $this->load->view('admin/booking/index', ['booking' => $result_booking], TRUE);
		$this->render();
	}

	public function booking_add()
	{
		$query = $this->db->get('tbl_restaurant');
		$data['restaurant'] = $query->result();
		$this->_data['main_content'] = $this->load->view('admin/booking/add', $data, TRUE);
		$this->render();
	}

	public function booking_edit()
	{
		$id_booking = $this->input->get('id');
		$query = $this->db->get_where('tbl_booking', array('id_booking' => $id_booking));
		$result = $query->result();
		$query = $this->db->get('tbl_restaurant');
		$data['restaurant'] = $query->result();
		$data['booking'] = $result;
		$data['id_booking'] = $id_booking;

		// var_dump($result);
		$this->_data['main_content'] = $this->load->view('admin/booking/edit', $data, TRUE);
		$this->render();
	}

	public function booking_edit_action()
	{
		// var_dump($this->input->post());die();
		$id_booking = $this->input->post('id_booking');
		$id_restaurant = $this->input->post('id_restaurant');
		$time = $this->input->post('time');
		$amount = $this->input->post('amount');
		$name = $this->input->post('name');
		$phone_number = $this->input->post('phone_number');
		$email = $this->input->post('email');
		$status = $this->input->post('status') == 'on' ? 1 : 0;

		$data = array(
			'id_restaurant' =>  $id_restaurant,
			'time' =>  $time,
			'amount' =>  $amount,
			'name' =>  $name,
			'phone_number' =>  $phone_number,
			'email' =>  $email,
			'status' => $status
		);
		$this->db->where('id_booking', $id_booking);
		if ($this->db->update('tbl_booking', $data)) {
			echo "
        <script>
            window.alert('Cập nhật thành công!');
			window.location.href = 'booking';
        </script>
    ";
		}
		// $item_restaurant = $this->db->get_where('tbl_restaurant', array('id_restaurant' => $id_restaurant))->result_array();
	}

	public function booking_delete()
	{
		$id_booking = $this->input->get('id');
		$this->db->delete('tbl_booking', array('id_booking' => $id_booking));
		echo "
        <script>
            window.alert('Xóa thành công!');
			window.location.href = document.referrer;
        </script>
    ";
	}
}
