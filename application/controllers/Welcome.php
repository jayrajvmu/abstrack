<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('index');
	}

	public function service()
	{
		header('Access-Control-Allow-Origin: *');			

		$this->load->view('service');
	}

	public function portfolio()
	{
		header('Access-Control-Allow-Origin: *');			

		$this->load->view('portfolio');
	}

	public function contact()
	{
		header('Access-Control-Allow-Origin: *');			

		$this->load->view('contact');
	}

	public function contactdataget()
	{
		$data = array(  
			'name'     => $this->input->post('contact-name'),  
			'email'  => $this->input->post('contact-email'),  
			'company'   => $this->input->post('contact-company'),  
			'message' => $this->input->post('contact-message')  
			); 
			$this->load->model('MainModel');

			$this->MainModel->insert_contact_information($data);

		redirect(base_url("contact"));
			
	}
	
}
