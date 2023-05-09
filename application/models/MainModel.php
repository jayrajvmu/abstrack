<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {

	public function __construct()  
	{  
		 // Call the Model constructor  
		parent::__construct();  
		$this->load->database('default');
	}

	 // === get menu ===
	  public function insert_contact_information($data)  
		{  

			$name=$data['name'];
			$email=$data['email'];
			$company=$data['company'];
			$message=$data['message'];

			


			// $sql=" INSERT INTO contect_information (name, email, company, message)
			// VALUES ('.$data["name"].','.$data['email'].','.$data['company'].','.$data['message'].')    ";


				// $sql=" INSERT INTO projects (name, email, company, message) 
				// VALUES ('.$name.','.$email.','.$company.','.$message.')    ";
				// 				$query = $this->db->query($sql);

				$this->db->insert("contect_information", $data); 


			return $data;
		}






 




}