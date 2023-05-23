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

		public function insert_category_information($data)  
		{  

				$this->db->insert("category_information", $data); 

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
		public function getcategory()
		{
			$sql = "SELECT * FROM `category_information`";	
		$query = $this->db->query($sql);

		$details = $query->result_array();

		return $details;
		}

		public function deletecategorydata($id)
		{
		
			$this->db->delete('category_information', ['id'=>$id]);

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

			public function getclientlogo()
			{
				$sql = "SELECT * FROM `client_logo`";	
			$query = $this->db->query($sql);

			$details = $query->result_array();

			return $details;
			}


			public function clientlogoinsert($data)
			{
			$this->db->insert("client_logo", $data);
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


			public function clientlogoget()
			{
				$sql = "SELECT * FROM `client_logo`";	
				$query = $this->db->query($sql);
	
				$details = $query->result_array();
	
				return $details;
			}

			public function checkclientlogo($id){
				$query = $this->db->get_where('client_logo', ['id'=>$id]);

				return $query->row();

			}

			public function deleteclientlogo($id){
			$this->db->delete('client_logo', ['id'=>$id]);

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



			public function insert_post_information($data)  
			{  
	
					$this->db->insert("our_work_information", $data); 
	
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

			public function getpostdata()
			{
				$sql = "SELECT * FROM `our_work_information`";	
			$query = $this->db->query($sql);

			$details = $query->result_array();

			return $details;
			}




			public function getpostdataperticular($id)
			{
				$sql = "SELECT * FROM `our_work_information` WHERE id='$id'";	
			$query = $this->db->query($sql);

			$details = $query->result_array();

			return $details;
			}




			public function update_post_information($data)  
			{ 
				
				
				$name=$data["name"];
				$imgdata=json_decode($data["images"]);
	
					
			// $sql = "SELECT * FROM `our_work_information` WHERE name='$name'";	
			// $query = $this->db->query($sql);

			$sql = "SELECT * FROM `our_work_information` WHERE id='$name'";	

			$query = $this->db->query($sql);

			$details = $query->result_array();


			$newimage=json_decode($details[0]["images"]);
			$items = array();

			foreach($imgdata as $imgindidual){
				$items[] = $imgindidual;

			}

			foreach($newimage as $newimagedata){
				$items[] = $newimagedata;

			}

			$data=[
				'name'=>$details[0]["name"],
				'category'=>$details[0]["category"],
				'tump'=>$details[0]["tump"],
				'images'=>json_encode($items)
			];


			$this->db->where('id', $name);
			$this->db->update('our_work_information', $data	);




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
	
	
				// 	if ($this->db->affected_rows() == '1')
				// {
				// 	$result["result"] = "success";
				// 	return $result;
				// }
				// else
				// {
				// 	$result["result"] = "fail";
				// 	return $result;
				// }
			}


			function can_login($username, $password)  
			{  
				 $this->db->where('username', $username);  
				 $this->db->where('password', $password);  
				 $query = $this->db->get('users');  
				 //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
				 if($query->num_rows() > 0)  
				 {  
					  return true;  
				 }  
				 else  
				 {  
					  return false;       
				 }  
			} 


}