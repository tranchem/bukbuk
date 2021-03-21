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
		$query = $this->db->get('tbl_menu');
		// $this->load->view('layout/index');
		$result_menu = $query->result();
		$this->_data['main_content'] = $this->load->view('admin/menu/index', ['menu' => $result_menu], TRUE);
		 $this->render();
	}

	public function menu_add()
	{
		$query = $this->db->get('tbl_menu');
		$data['menu'] = $query->result();
		$this->_data['main_content'] = $this->load->view('admin/menu/add', $data, TRUE);
		$this->render();
	}

	public function menu_add_action()
	{
		// var_dump($this->input->post());die();
		$id_menu = $this->input->post('id_menu');
		$name = $this->input->post('name');

		$data = array(
			'id_menu' =>  $id_menu,
			'name' =>  $name,
		);
		$this->db->where('id_menu', $id_menu);
		if ($this->db->insert('tbl_menu', $data)) {
			echo "
        <script>
            window.alert('Cập nhật thành công!');
			window.location.href = 'menu';
        </script>
    ";
		}
		// $item_restaurant = $this->db->get_where('tbl_restaurant', array('id_restaurant' => $id_restaurant))->result_array();
	}

	public function menu_edit()
	{
		$id_menu = $this->input->get('id');
		$query = $this->db->get_where('tbl_menu', array('id_menu' => $id_menu));
		$result = $query->result();
		$query = $this->db->get('tbl_menu');
		$data['main_content'] = $query->result();
		$data['menu'] = $result;
		$data['id_menu'] = $id_menu;

		// var_dump($result);
		$this->_data['main_content'] = $this->load->view('admin/menu/edit', $data, TRUE);
		$this->render();
	}

	public function menu_edit_action()
	{
		// var_dump($this->input->post());die();
		$id_menu = $this->input->post('id_menu');
		$name = $this->input->post('name');

		$data = array(
			'id_menu' =>  $id_menu,
			'name' =>  $name,
		);
		$this->db->where('id_menu', $id_menu);
		if ($this->db->update('tbl_menu', $data)) {
			echo "
        <script>
            window.alert('Cập nhật thành công!');
			window.location.href = 'menu';
        </script>
    ";
		}
		// $item_restaurant = $this->db->get_where('tbl_restaurant', array('id_restaurant' => $id_restaurant))->result_array();
	}

	public function menu_delete()
	{
		$id_menu = $this->input->get('id');
		$this->db->delete('tbl_menu', array('id_menu' => $id_menu));
		echo "
        <script>
            window.alert('Xóa thành công!');
			window.location.href = document.referrer;
        </script>
    ";
	}

	public function booking()
	{
		$this->db->select('b.id_booking, b.id_restaurant, b.time, b.amount, b.name, b.phone_number, b.email, b.status, r.name as name_restaurant');
		$this->db->from('tbl_booking b');
		$this->db->join('tbl_restaurant r', 'r.id_restaurant = b.id_restaurant');
		$this->db->order_by('time', 'DESC');
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

	public function product()
	{
		$this->db->select('b.id_product, b.id_menu, b.name, b.image, r.name as name_menu');
		$this->db->from('tbl_product b');
		$this->db->join('tbl_menu r', 'r.id_menu = b.id_menu');
		$query = $this->db->get();
		$result_product = $query->result();

		$this->_data['main_content'] = $this->load->view('admin/product/index', ['product' => $result_product], TRUE);
		$this->render();
	}

	public function product_add()
	{
		$query = $this->db->get('tbl_menu');
		$data['menu'] = $query->result();
		$this->_data['main_content'] = $this->load->view('admin/product/add', $data, TRUE);
		$this->render();
	}

	public function product_add_action()
	{
		// var_dump($this->input->post());die();
		$id_product = $this->input->post('id_product');
		$id_menu = $this->input->post('id_menu');
		$name = $this->input->post('name');
		$image =  $this->input->post('image');

		$data = array(
			'id_product' =>  $id_product,
			'id_menu' =>  $id_menu,
			'name' =>  $name,
			'image' =>  $image,

		);
		$this->db->where('id_product', $id_product);
		if ($this->db->insert('tbl_product', $data)) {
			echo "
        <script>
            window.alert('Cập nhật thành công!');
			window.location.href = 'product';
        </script>
    ";
		}
		// $item_restaurant = $this->db->get_where('tbl_restaurant', array('id_restaurant' => $id_restaurant))->result_array();
	}

	public function product_delete()
	{
		$id_product = $this->input->get('id');
		$this->db->delete('tbl_product', array('id_product' => $id_product));
		echo "
        <script>
            window.alert('Xóa thành công!');
			window.location.href = document.referrer;
        </script>
    ";
	}
	public function product_edit()
	{
		$id_product = $this->input->get('id');
		$query = $this->db->get_where('tbl_product', array('id_product' => $id_product));
		$result = $query->result();
		$query = $this->db->get('tbl_menu');
		$data['menu'] = $query->result();
		$data['product'] = $result;
		$data['id_product'] = $id_product;

		// var_dump($result);
		$this->_data['main_content'] = $this->load->view('admin/product/edit', $data, TRUE);
		$this->render();
	}

	public function product_edit_action()
	{
		// var_dump($this->input->post());die();
		$id_product = $this->input->post('id_product');
		$id_menu = $this->input->post('id_menu');
		$name = $this->input->post('name');
		$image = $this->input->post('image');

		$data = array(
			'id_menu' =>  $id_menu,
			'name' =>  $name,
			'image' =>  $image,
			
		);
		$this->db->where('id_product', $id_product);
		if ($this->db->update('tbl_product', $data)) {
			echo "
        <script>
            window.alert('Cập nhật thành công!');
			window.location.href = 'product';
        </script>
    ";
		}
		// $item_restaurant = $this->db->get_where('tbl_restaurant', array('id_restaurant' => $id_restaurant))->result_array();
	}
}
