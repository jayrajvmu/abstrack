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

	    public function __construct() {
      parent::__construct(); 
  
      $this->load->library('form_validation');
      $this->load->library('session');
   }
   
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

	
	public function subscriber()
	{
		header('Access-Control-Allow-Origin: *');	
		$this->load->model('MainModel');
		$result= $this->MainModel->getsubscribers();
		$data["result"]=$result;
		$this->load->view('subscriber', $data);
	}

	public function contactdataget()
	{

		header('Access-Control-Allow-Origin: *');			


        $this->form_validation->set_rules('contact_name', ' contact_name', 'required');
        $this->form_validation->set_rules('contact_email', 'contact_email', 'required');
        $this->form_validation->set_rules('contact_company', 'contact_company', 'required');
        $this->form_validation->set_rules('contact_message', 'contact_message', 'required');


		if($this->form_validation->run()){
		$data = array(  
			'name'     => $this->input->post('contact_name'),  
			'email'  => $this->input->post('contact_email'),  
			'company'   => $this->input->post('contact_company'),  
			'message' => $this->input->post('contact_message'),
			'flag'=>'1'  
			); 
			$this->load->model('MainModel');

			$result= $this->MainModel->insert_contact_information($data);

			var_dump($result);

			if($result["result"]=="success")
{
  $this->session->set_flashdata('true', 'Thank you for your great time');
}
else
{
  $this->session->set_flashdata('err', "Something went wrong, please refresh the page");
}
			redirect(base_url("contact"));
		}
		else{
			redirect(base_url("/"));

		}
		

			
	}



	public function subscriberget()
	{

		header('Access-Control-Allow-Origin: *');			


        $this->form_validation->set_rules('subs_email', ' Email', 'required');

		if($this->form_validation->run()){
		$data = array(  
			'email'     => $this->input->post('subs_email'),
			'flag'=>'1'  
			); 
			$this->load->model('MainModel');
			$result= $this->MainModel->insert_subs_information($data);

			var_dump($result);
		

if($result["result"]=="success")
{
  $this->session->set_flashdata('substrue', 'Subscribed succesfully');
}
else if ($result["result"]=="fail")
{
  $this->session->set_flashdata('subserr', "Already Subscribed");
}else{
	$this->session->set_flashdata('subserr2', "Something went wrong, please refresh the page");
}
		


		}
		redirect(base_url("/"));
		
		

			
	}


	public function deletesubs($id){

		echo $id;
		$this->load->model('MainModel');
		$result= $this->MainModel->deletesubscribers($id);

		if($result["result"]=="success")
		{
		  $this->session->set_flashdata('subsdeltrue', 'Subscriber deleted');
		}
		else if ($result["result"]=="fail")
		{
		  $this->session->set_flashdata('subsdelerr', "Something went wrong, please refresh the page");
		}
					

		redirect(base_url("welcome/subscriber"));


	}



	public function contactview()
	{
		header('Access-Control-Allow-Origin: *');	
		$this->load->model('MainModel');
		$result= $this->MainModel->getcontacts();
		$data["result"]=$result;
		$this->load->view('contactview', $data);
	}

	public function deletecon($id){

		echo $id;
		$this->load->model('MainModel');
		$result= $this->MainModel->delectcontactmessgae($id);

		if($result["result"]=="success")
		{
		  $this->session->set_flashdata('consdeltrue', 'Subscriber deleted');
		}
		else if ($result["result"]=="fail")
		{
		  $this->session->set_flashdata('consdelerr', "Something went wrong, please refresh the page");
		}
					

		redirect(base_url("welcome/contactview"));


	}

	
}
