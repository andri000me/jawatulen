<?php 
	/**
	* 
	*/
	class Template extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function admin_template($data=null)
		{
			$this->load->view('template/admin_template_v', $data);
		}

		function blank_page($data=null)
		{
			$this->load->view('template/blank_page_v', $data);
		}
	}
