<?php
	/**
	* 
	*/
	class Dashboard extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
		}

		//public function index()
		//{
		//	$data['content_view'] = 'dashboard/dashboard_v';
		//	$this->template->admin_template($data);
		//}

		function index()
		{
			if ($this->session->userdata('username') != '')
			{
				// true
				$data['content_view'] = 'dashboard/dashboard_v';
				$this->template->admin_template($data);
				//echo '<h2> Selamat datang '.$this->session->userdata('username').'</h2>';
				//echo '<a href="'.base_url().'dashboard/logout">
				//		<input type="submit" name="" value="Logout">
				//	</a>';
			} else
			{
				// false
				redirect(base_url().'dashboard/login');
			}
		}

		function login()
		{
			if ($this->session->userdata('username') != '') {
				redirect('dashboard');
			} else {
				$this->load->view('login_v');
			}
			
			// http://localhost/datauser/dashboard/login
			//$data['title'] = "CodeIgniter Session";
			//$this->load->view('login_v', $data);
			
		}

		function login_validation()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required|max_length[12]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

			if ($this->form_validation->run())
			{
				// true
				$username 		= $this->input->post('username');
				$password 		= $this->input->post('password');

				// function model
				$this->load->model('mdl_dashboard');
				if ($this->mdl_dashboard->can_login($username, $password))
				{
					$session_data = array(
						'username' => $username
						);
					$this->session->set_userdata($session_data);
					redirect(base_url().'dashboard');
				} else
				{
					$this->session->set_flashdata('error', 'Username atau password salah');
					redirect(base_url().'dashboard/login');
				}
				
			} else
			{
				// false
				$this->login();
			}
		}

		function logout()
		{
			$this->session->unset_userdata('username');
			redirect(base_url().'dashboard/login');
		}
	}