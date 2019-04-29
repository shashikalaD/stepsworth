<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stepsworth extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

 	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	//load Model
	$this->load->model('Contact_modal');
	$this->load->model('Career_modal');
	$this->load->model('Adminlogin_modal');
	}

	public function index()
	{
		$_SESSION['username']='';	
		$data['middel_body'] = 'index';
		$data['keep_slider'] = true;
		$this->load->view('templates',$data);
		
			
	}

	public function about()
	{
		$data['middel_body'] = 'about';	
		$this->load->view('templates',$data);
		$_SESSION['username']='';
	}

	public function what_we_do()
	{
		$data['middel_body'] = 'what_we_do';	
		$this->load->view('templates',$data);
		$_SESSION['username']='';
	}

	public function contact()
	{
		//$this->load->view('includes/header');
		//load registration view form
		$data['middel_body'] = 'contact';	
		$this->load->view('templates',$data);
		$_SESSION['username']='';
		if($this->input->post('save'))
		{
		$n=$this->input->post('name');
		$e=$this->input->post('mobile');
		$m=$this->input->post('message');
		$res=$this->Contact_modal->saverecords($n,$e,$m);
		if(!$res)
		{
			echo "Records Saved Successfully.";
		}		
		else
		{
			echo "Error Occured. cant insert data!!!";
		}
		die();
		}
		
	}

	public function placement()
	{
		$data['middel_body'] = 'placement';	
		$this->load->view('templates',$data);
		$_SESSION['username']='';
	}

	public function career()
	{
		$data['middel_body'] = 'career';	
		$this->load->view('templates',$data);
		$_SESSION['username']='';
		if($this->input->post('save'))
		{
			$profile=$this->input->post('profile');
			$name=$this->input->post('name');
			$emails=$this->input->post('emails');
			$qualification=$this->input->post('qualification');
			$mobile=$this->input->post('mobile');
			$status=$this->input->post('status');
			$experience=$this->input->post('experience');
			$profiledata=$this->input->post('profiledata');
			$location='Resume';
			if(!is_dir($location)){
			mkdir($location);
			}
			$fileParts = pathinfo($_FILES['exampleInputFile']['name']);
			$attaddfile = $location."/".substr($name,0,4).'.'. $fileParts['extension'];
			move_uploaded_file($_FILES['exampleInputFile']['tmp_name'], $attaddfile);
			$res=$this->Career_modal->saverecords($profile,$name,$emails,$qualification,$mobile,$status,$experience,$attaddfile,$profiledata);
			if(!$res)
			{
				echo "Records Saved Successfully.";
			}		
			else
			{
				echo "Error Occured. cant insert data!!!";
			}
			die();
		}
	}
	public function admin()
	{
		$data['middel_body'] = 'admin';	
		$this->load->view('templates',$data);
		if($this->input->post('login'))
		{
			$username=$this->input->post('username');
			$_SESSION['username']=$username;
			$password=$this->input->post('password');
			$res=$this->Adminlogin_modal->selectrecord($username,$password);
			if($res==1)
			{
				echo "1";
				$this->load->view('templates',$data);
			}		
			else
			{
				echo "2";
			}
			die();
		}
	}
	public function placementdetail()
	{
		$data['middel_body'] = 'placementdetail';
		$this->load->view('templates',$data);
		$res=$this->Adminlogin_modal->placementdetails();
	}
	public function contactdetail()
	{
		$data['middel_body'] = 'contactdetail';
		$this->load->view('templates',$data);
		$res=$this->Adminlogin_modal->contactdetails();
	}
}
