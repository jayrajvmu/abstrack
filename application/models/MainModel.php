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

		

				$this->db->insert("contect_information", $data); 

				echo $this->db->affected_rows();


				if ($this->db->affected_rows() == '1')
			{
				$result["result"] = "success";
				return $result;
			}
			else
			{
				$result["result"] = "fail";
				return $result;
			}
		}


		public function insert_subs_information($data)  
		{  

			$email=$data['email'];


			$sql = "SELECT * FROM `subscribers` WHERE email='$email'";	
			$query = $this->db->query($sql);

			$details = $query->result_array();
			
			if(count($details)=== 0){

				$this->db->insert("subscribers", $data); 


				if ($this->db->affected_rows() == '1')
			{
				$result["result"] = "success";
				return $result;
			}
			else
			{
				$result["result"] = "faildb";
				return $result;
			}
				

			}else{
				$result["result"] = "fail";
				return $result;
			}





	
			 
 	

			 
		}


		public function getsubscribers()
			{
				$sql = "SELECT * FROM `subscribers`";	
			$query = $this->db->query($sql);

			$details = $query->result_array();

			return $details;
			}


			public function deletesubscribers($id)
			{
			

			$this->db->where('id', $id);
			$this->db->update('subscribers', array("flag"=>0)	);

				if ($this->db->affected_rows() == '1')
				{
					$result["result"] = "success";
					return $result;
				}
				else
				{
					$result["result"] = "fail";
					return $result;
				}
			}


			public function getcontacts()
			{
				$sql = "SELECT * FROM `contect_information`";	
			$query = $this->db->query($sql);

			$details = $query->result_array();

			return $details;
			}
 
			public function delectcontactmessgae($id)
			{
			

			$this->db->where('id', $id);
			$this->db->update('contect_information', array("flag"=>0)	);

				if ($this->db->affected_rows() == '1')
				{
					$result["result"] = "success";
					return $result;
				}
				else
				{
					$result["result"] = "fail";
					return $result;
				}
			}





}