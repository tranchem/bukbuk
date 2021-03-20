<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends Layout
{

	public function index()
	{
		// $this->load->view('layout/index');

		$query = $this->db->get('tbl_restaurant');
		// $result_restaurant = $query->result();
		// var_dump($query->result());

		$data['restaurant'] = $query->result();

		$this->_data['main_content'] = $this->load->view('booking/index', $data, TRUE);
		$this->render();
	}

	public function add()
	{
		// var_dump($this->input->post());

		$id_restaurant = $this->input->post('id_restaurant');
		$time = $this->input->post('time');
		$amount = $this->input->post('amount');
		$name = $this->input->post('name');
		$phone_number = $this->input->post('phone_number');
		$email = $this->input->post('email');

		$data = array(
			'id_restaurant' =>  $id_restaurant,
			'time' =>  $time,
			'amount' =>  $amount,
			'name' =>  $name,
			'phone_number' =>  $phone_number,
			'email' =>  $email
		);

		$this->db->insert('tbl_booking', $data);

		$item_restaurant = $this->db->get_where('tbl_restaurant', array('id_restaurant' => $id_restaurant))->result_array();
		// var_dump($item_restaurant);
		// echo '\n';
		// var_dump($item_restaurant[0]['name']);
		// die();

		$this->load->library('email');
		$this->email->from('tuvantran.it@gmail.com', 'Buk buk');
		$this->email->to('tuvantran.it@gmail.com');
		// $this->email->cc('another@another-example.com');
		// $this->email->bcc('them@their-example.com');

		$this->email->subject('Bạn nhận dược đơn đặt bàn mới');
		$body = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
        ";
		$body .= "<b>Thông tin đặt bàn</b>";

		$body .= "
			<p>Họ tên: ".$name."</p>
			<p>Điện thoại: ".$phone_number."</p>
			<p>Email: ".$email."</p>
			<p>Nhà hàng: ".$item_restaurant[0]['name']."</p>
			<p>Thời gian: ".$time."</p>
			<p>Số khách: ".$amount."</p>
		";
		$body .= "
            </body>
            </html>
        ";
		$this->email->message($body);

		// $result = $this->email->send();

		// var_dump($result);
		if ($this->email->send()) {
			echo "
        <script>
            window.alert('Đặt bàn thành công!');
			history.go(-1);
        </script>
    ";
		} else {
			show_error($this->email->print_debugger());
		}

		// die();
	}
}
