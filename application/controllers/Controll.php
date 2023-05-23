<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controll extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/controll
	 *	- or -
	 * 		http://example.com/index.php/controll/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/controll/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	    public function __construct() {
      parent::__construct(); 
  
      $this->load->library('form_validation');
      $this->load->library('session');
   }
   
	public function index()
	{
		header('Access-Control-Allow-Origin: *');	
		$this->load->model('MainModel');
		$result= $this->MainModel->clientlogoget();
		$data["client_logo"]=$result;
		$this->load->view('index', $data);
	}


	public function service()
	{
		header('Access-Control-Allow-Origin: *');			

		$this->load->view('service');
	}


	public function portfolio()
	{
		header('Access-Control-Allow-Origin: *');	
		$this->load->model('MainModel');
		$result= $this->MainModel->getcategory();
		$resultpostdata= $this->MainModel->getpostdata();

		$data["category"]=$result;
		$data["post"]=$resultpostdata;



		

		$this->load->view('portfolio', $data);
	}

	public function ourworkspost()
	{
		header('Access-Control-Allow-Origin: *');
		$this->load->model('MainModel');
	
		$result= $this->MainModel->getcategory();
		$data["category"]=$result;
		$this->load->view('ourworkspost', $data);
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

	public function adminhome()
	{
		header('Access-Control-Allow-Origin: *');			

		$this->load->view('adminhome');
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
					

		redirect(base_url("controll/subscriber"));


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
					

		redirect(base_url("controll/contactview"));


	}



// client logo//////////////////////////////////////////////////////////////////////////////////////

public function uploadclientlogo()
{
	header('Access-Control-Allow-Origin: *');	

	$this->load->view('uploadclientlogo');
}


public function clientlogolist()
{
	header('Access-Control-Allow-Origin: *');	
	$this->load->model('MainModel');
	$result= $this->MainModel->getclientlogo();
	$data["result"]=$result;		
	$this->load->view('clientlogolist', $data);
}



public function uploadclientlogofunc(){
	$this->load->helper('url');

// Check form submit or not 
if($this->input->post('upload') != NULL ){ 
$ori_name=$_FILES['file']['name'];
$new_name=time()."".str_replace(' ','-',$ori_name) ;


$config = array(
	
	'upload_path' => './assets/client_logo',
	'allowed_types' => "png",
	'file_name'=>$new_name,
	'max_size' => "1024000", // file size , here it is 1 MB(1024 Kb)
);
$this->upload->initialize($config);



$this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('file'))
			{
					$ImageError = array('ImageError' => $this->upload->display_errors());

	   
					$this->session->set_flashdata('ImageError',  $ImageError);
					redirect(base_url("controll/uploadclientlogo"));

			}
			else
			{
					$prod_filename=$this->upload->data('file_name');
					$data=[
						'client_name'=>$this->input->post('client_name'),
						'client_logo'=>  $prod_filename,
				
					];

					$this->load->model('MainModel');

					$result=$this->MainModel->clientlogoinsert($data);

		if($result["result"]=="success")
{
$this->session->set_flashdata('insertlogotr', 'Subscribed succesfully');
}
else if ($result["result"]=="fail")
{
$this->session->set_flashdata('insertlogoer', "Already Subscribed");
}else{
$this->session->set_flashdata('insertlogoer2', "Something went wrong, please refresh the page");
}



		redirect(base_url("controll/uploadclientlogo"));
			}


}
}







	public function deleteclientlogo($id){

	
		$this->load->model('MainModel');
		if($this->MainModel->checkclientlogo($id)){

			$data=$this->MainModel->checkclientlogo($id);
			

			if(file_exists("./assets/client_logo/".$data->client_logo)){
				unlink("./assets/client_logo//".$data->client_logo);
				$result=$this->MainModel->deleteclientlogo($id);


				if($result["result"]=="success")
				{
				$this->session->set_flashdata('deleteclilogotr', 'Deleted succesfully');
				}
				else if ($result["result"]=="fail")
				{
				$this->session->set_flashdata('deleteclilogotrer', "Can not deletable");
				}else{
				$this->session->set_flashdata('deleteclilogotrer2', "Something went wrong, please refresh the page");
				}

			}

		}
			

		redirect(base_url("controll/clientlogolist"));


	}

	// client logo//////////////////////////////////////////////////////////////////////////////////////



	// portfolio curl_multi_getcontent//////////////////////////////////////////////////////


	public function portfoliocategory()
	{
		header('Access-Control-Allow-Origin: *');			
		$this->load->model('MainModel');
		$result= $this->MainModel->getcategory();
		$data["category"]=$result;
		$this->load->view('portfoliocategory', $data);
	
	}

	public function addportfoliocategory()
	{

		header('Access-Control-Allow-Origin: *');			


        $this->form_validation->set_rules('category_name', ' category_name', 'required');
    


		if($this->form_validation->run()){
		$data = array(  
			'category_name'     => $this->input->post('category_name'),  
			'flag'=>'1'  
			); 
			$this->load->model('MainModel');

			$result= $this->MainModel->insert_category_information($data);

			if($result["result"]=="success")
{
  $this->session->set_flashdata('categorytrue', 'Created');
}
else
{
  $this->session->set_flashdata('categoryerr', "Something went wrong, please refresh the page");
}
			redirect(base_url("controll/portfoliocategory"));
		}
		else{
			redirect(base_url("controll/portfoliocategory"));

		}
		

			
	}


	public function deletecategory($id){


		$this->load->model('MainModel');
		$result= $this->MainModel->deletecategorydata($id);

		if($result["result"]=="success")
		{
		  $this->session->set_flashdata('categorydeltr', 'Category deleted');
		}
		else if ($result["result"]=="fail")
		{
		  $this->session->set_flashdata('categorydeler', "Something went wrong, please refresh the page");
		}
					

		redirect(base_url("controll/portfoliocategory"));


	}


	// portfolio curl_multi_getcontent//////////////////////////////////////////////////////







	// ourworkupload multiple//////////////////////////////////////////////////////////////////


	public function multiple_files(){
		$this->form_validation->set_rules('name', ' name', 'required');
		$this->form_validation->set_rules('category', ' category', 'required');
		$this->form_validation->set_rules('tump', ' tump', 'required');
		$this->form_validation->set_rules('images', ' images', 'required');


		$this->load->library('upload');
		$image = array();
		$ImageCount = count($_FILES['image_name']['name']);

			  for($i = 0; $i < $ImageCount; $i++){
				  $_FILES['file']['name']       = time()."".str_replace(' ','-',$_FILES['image_name']['name'][$i]) ;
				  $_FILES['file']['type']       = $_FILES['image_name']['type'][$i];
				  $_FILES['file']['tmp_name']   = $_FILES['image_name']['tmp_name'][$i];
				  $_FILES['file']['error']      = $_FILES['image_name']['error'][$i];
				  $_FILES['file']['size']       = $_FILES['image_name']['size'][$i];
	  
				  // File upload configuration
				  $uploadPath = './assets/our_work_image';
				  $config['upload_path'] = $uploadPath;
				  $config['allowed_types'] = 'jpg|jpeg|png';
	  
				  // Load and initialize upload library
				  $this->load->library('upload', $config);
				  $this->upload->initialize($config);
	  
				  // Upload file to server
				  if($this->upload->do_upload('file')){
					  // Uploaded file data
					  $imageData = $this->upload->data();
					   $uploadImgData[$i]['image_name'] = $imageData['file_name'];   
				  }
			  }








			  
			   if(!empty($uploadImgData)){
				  // Insert files data into the database
				//   $this->pages_model->multiple_images($uploadImgData); 
				// var_dump($uploadImgData)  ;
				
				$ori_name=$_FILES['thump']['name'];
$new_name=time()."".str_replace(' ','-',$ori_name) ;

$config2 = array(
	
	'upload_path' => './assets/our_work_image',
	'allowed_types' => "jpg|jpeg|png",
	'file_name'=>$new_name,
	'max_size' => "1024000", // file size , here it is 1 MB(1024 Kb)
);
$this->upload->initialize($config2);



$this->load->library('upload', $config2);

if($this->upload->do_upload('thump')){
	// Uploaded file data
	$logodata = $this->upload->data();
	 $logoimage= $logodata['file_name'];  
	 
	//  $imagesdaa=[];
	//  foreach($uploadImgData as $imgdata){
	// 	array_push($imagesdaa,$imgdata );
	//  }




	 $data=[
		'name'=>$this->input->post('name'),
		'category'=>$this->input->post('category'),
		'tump'=>$logoimage,
		'images'=>json_encode($uploadImgData)
	];



	$this->load->model('MainModel');
	$result= $this->MainModel->insert_post_information($data);



	
	if($result["result"]=="success")
	{
	$this->session->set_flashdata('addposttr', 'Added succesfully');
	}
	else if ($result["result"]=="fail")
	{
	$this->session->set_flashdata('addposter', "Can not addable");
	}else{
	$this->session->set_flashdata('addposter2', "Something went wrong, please refresh the page");
	}

	redirect(base_url("controll/ourworkspost"));


}
			  }



	

	}



	public function ourworks($id)
	{
		header('Access-Control-Allow-Origin: *');			
		$this->load->model('MainModel');
		$result= $this->MainModel->getpostdataperticular($id);
		$data["images"]=$result;
		$this->load->view('ourworks', $data);
	}

		// ourworkupload multiple//////////////////////////////////////////////////////////////////
		public function ourworkex()
		{
			header('Access-Control-Allow-Origin: *');
			$this->load->model('MainModel');
		
			$result= $this->MainModel->getpostdata();
			$data["category"]=$result;
			$this->load->view('ourworkex', $data);
		}



		public function multiple_files_for_ex(){

			$this->form_validation->set_rules('post_name', ' post_name', 'required');
			$this->form_validation->set_rules('image_name', ' image_name', 'required');


			$this->load->library('upload');
			$image = array();
			$ImageCount = count($_FILES['image_name']['name']);
	
				  for($i = 0; $i < $ImageCount; $i++){
					  $_FILES['file']['name']       = time()."".str_replace(' ','-',$_FILES['image_name']['name'][$i]) ;
					  $_FILES['file']['type']       = $_FILES['image_name']['type'][$i];
					  $_FILES['file']['tmp_name']   = $_FILES['image_name']['tmp_name'][$i];
					  $_FILES['file']['error']      = $_FILES['image_name']['error'][$i];
					  $_FILES['file']['size']       = $_FILES['image_name']['size'][$i];
		  
					  // File upload configuration
					  $uploadPath = './assets/our_work_image';
					  $config['upload_path'] = $uploadPath;
					  $config['allowed_types'] = 'jpg|jpeg|png';
		  
					  // Load and initialize upload library
					  $this->load->library('upload', $config);
					  $this->upload->initialize($config);
		  
					  // Upload file to server
					  if($this->upload->do_upload('file')){
						  // Uploaded file data
						  $imageData = $this->upload->data();
						   $uploadImgData[$i]['image_name'] = $imageData['file_name'];   
					  }
				  }

	
				  
				   if(!empty($uploadImgData)){
					  // Insert files data into the database
					//   $this->pages_model->multiple_images($uploadImgData); 
					// var_dump($uploadImgData)  ;
					
				
	
	
					$this->form_validation->set_rules('post_name', ' post_name', 'required');

	
		 $data=[
			'name'=>$this->input->post('post_name'),
			'images'=>json_encode($uploadImgData)
		];
	
	
		$this->load->model('MainModel');
		$result= $this->MainModel->update_post_information($data);


		var_dump($result);
	
	
	
		
		if($result["result"]=="success")
		{
		$this->session->set_flashdata('ourworkextr', 'Added succesfully');
		}
		else if ($result["result"]=="fail")
		{
		$this->session->set_flashdata('ourworkexer', "Can not addable");
		}else{
		$this->session->set_flashdata('ourworkexer2', "Something went wrong, please refresh the page");
		}
	
		redirect(base_url("controll/ourworkex"));
	
	
	
				  }
	
	
	
		
				  redirect(base_url("controll/ourworkex"));

		}


		function login()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           $data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
		   $this->session->userdata['logged']=FALSE;

           $this->load->view("login", $data);  
      } 


		function login_validation()  
		{  
			$this->load->helper(array('form','url'));

			 $this->load->library('form_validation');  
			 $this->form_validation->set_rules('username', 'Username', 'required');  
			 $this->form_validation->set_rules('password', 'Password', 'required'); 
 
			 if($this->form_validation->run())  
			 {  
				  //true  
				  $username = $this->input->post('username');  
				  $password = $this->input->post('password');  
				  //model function  
				  $this->load->model('MainModel');

				  if($this->MainModel->can_login($username, $password))  
				  {  
					//    $session_data = array(  
					// 		'username'     =>     $username  
					//    );  
					//    $this->session->set_userdata($session_data);  
					   $this->session->userdata['logged']=TRUE;
					   redirect(base_url() . 'adminhome');  
				  }  
				  else  
				  {  
					   $this->session->set_flashdata('error', 'Invalid Username and Password');  
					   redirect(base_url() . 'login');  
				  }  
			 }  
			 else  
			 {  
				  //false  
				  $this->login();  
			 }  
		}  
		function enter(){  
			 if($this->session->userdata('username') != '')  
			 {  
				  echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
				  echo '<label><a href="'.base_url
  
  ().'main/logout">Logout</a></label>';  
			 }  
			 else  
			 {  
				  redirect(base_url() . 'login');  
			 }  
		}  
		function logout()  
		{  
			 $this->session->unset_userdata('username');  
			 redirect(base_url() . 'login');  
		}

}
