<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

	public function index()
	{
		// $data['popular'] = $this->Main_model->fetch_data_by_limit('post_blog', ['status' => 0], 'id DESC', 0, 9);

		$data['latest'] = $this->Main_model->fetch_data_by_limit('post_blog', ['status' => 0], 'id DESC', 0, 4);

		$data['d'] = $this->Main_model->fetch_data_by_limit('post_blog', ['status' => 0], '', 0, 3);

		$this->load->view('index', $data);
	}
	// {
	// 	$this->load->view('index');
	// }
	public function about()
	{
		$this->load->view('about');
	}
	public function pediatrics()
	{
		$this->load->view('pediatrics');
	}
	public function gynaecology()
	{
		$this->load->view('gynaecology');
	}
	public function DrManuPortfolio()
	{
		$this->load->view('DrManuPortfolio');
	}
	public function DrShefaliPortfolio()
	{
		$this->load->view('DrShefaliPortfolio');
	}
	public function appointment()
	{
		$this->load->view('appointment');
	}
	public function mobile_app_development()
	{
		$this->load->view('mobile-app-development');
	}

	public function service()
	{
		$this->load->view('service');
	}

	public function web_development()
	{
		$this->load->view('web-development');
	}
	public function ui_ux_design()
	{
		$this->load->view('ui-ux-design');
	}

	public function digital_marketing()
	{
		$this->load->view('digital_marketing');
	}

	public function ott_campaigns()
	{
		$this->load->view('ott-campaigns');
	}

	public function portfollio()
	{
		$this->load->view('portfollio');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function rafhtaar()
	{
		$this->load->view('rafhtaar');
	}
	public function acharyaclasses()
	{
		$this->load->view('acharya-classes');
	}
	public function ujjawalbhawisya()
	{
		$this->load->view('ujjawalbhawisya');
	}

	public function blog()
	{
		$pageno = (!empty($this->input->get('per_page'))) ? $this->input->get('per_page') : 1;
		$limit = 4;
		$offset = intval(($pageno - 1) * $limit);
		$config['base_url'] = base_url();
		$config['per_page'] = $limit;
		$config['total_rows'] = $this->Main_model->get_product($config['per_page'], $offset, true);
		$config['enable_query_strings'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['popular'] = $this->Main_model->fetch_data_by_limit('post_blog', ['status' => 0], 'id DESC', 0, 9);
		$data['latest'] = $this->Main_model->fetch_data_by_limit('post_blog', ['status' => 0], 'id DESC', 0, 4);
		$data['d1'] = $this->Main_model->get_product($config['per_page'], $offset, false);
		//$data['d1'] = $this->Main_model->fetch_data_by_limit('post_blog', ['status'=>0], '', 0,5);
		$data['d'] = $this->Main_model->fetch_data_by_limit('post_blog', ['status' => 0], '', 0, 3);
		$this->load->view('blog', $data);
	}
	/*
		public function about()
		{
			$this->load->view('fornt_end/about');
		}

		public function service()
		{
			$this->load->view('fornt_end/service');
		}

		public function contact()
		{
			$this->load->view('fornt_end/contact');
		}*/


	public function blog_detail()
	{
		$data['latest'] = $this->Main_model->fetch_data_by_limit('post_blog', ['status' => 0], 'id DESC', 0, 4);
		$mix_id = $this->uri->segment(1);
		$id = $this->Main_model->single_row('post_blog', ['slug' => $mix_id], 'id');
		$data['d'] = $this->Main_model->fetch_data('post_blog', ['slug' => trim($mix_id)], '');
		$this->load->view('blog_detail', $data);
	}

	public function contact_action()
	{
		$this->load->library('mail');

		$name = $this->security->xss_clean($this->input->post('name'));
		$email = $this->security->xss_clean($this->input->post('email'));
		$phone = $this->security->xss_clean($this->input->post('phone'));
		$msg = $this->security->xss_clean($this->input->post('message'));

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');

		if ($this->form_validation->run() == TRUE) {

			$message = "<table style='border-collapse: collapse; border: 1px solid black;'>
				<tr style='border: 1px solid black;'>
				  	<td style='border: 1px solid black;'><b> Name : </b></td>
					<td style='border: 1px solid black;'>" . $name . "</td>
				</tr>

				<tr>
					<td style='border: 1px solid black;'><b> Email : </b></td>
					<td style='border: 1px solid black;'>" . $email . "</td>
				</tr>

				<tr>
					<td style='border: 1px solid black;'><b> Phone : </b></td>
					<td style='border: 1px solid black;'>" . $phone . "</td>
				</tr>

				<tr>
					<td style='border: 1px solid black;'><b> Message : </b></td>
					<td style='border: 1px solid black;'>" . $msg . "</td>
				</tr>
			</table>";

			$this->mail->send_mail($this->input->post('email'), 'Blog Contact', $message, '', '');

			$this->session->set_flashdata('error', 'Your Query Successfully Send...');
			return redirect('contact-us');

		} else {
			$this->session->set_flashdata('error', validation_errors());
			return redirect('contact-us');
		}
	}
}
