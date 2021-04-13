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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

        $this->load->view('header');
		$this->load->view('index');
	}

	public function selection(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('username','Username','required');
		//$this->form_validation->set_rules('password','Password','required');
//		if($this->form_validation->run()){
		//post data storing to var 
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
			//model function here
			$this->load->model('Main_model');
			if($this->Main_model->login_val($username,$password )){
		
		
		
		//retrieving values from model
		$categroies = $this->Main_model->get_admin($username,$password);
		
		
		
		//model values to session
		foreach($categroies as $row)
		{
		  $session_data = array(
			'adminid'  => $row->id,
			'adminname' => $row->username,
			   'admin_logged_in' => TRUE);
		  $this->session->set_userdata($session_data);
		
		  
		}
				
		
				if($this->session->userdata('adminname')!=''){
					redirect(base_url().'enter');
			
				}
				else{
					$this->session->set_flashdata('error','Invalid Username or password');
					redirect(base_url().'welcome');
				}
			}
			else{
				$this->session->set_flashdata('error','Invalid Username or password');
				redirect(base_url().'welcome');
			}
		
		//}
		

		

	}

	public function dashboard()
	{	if($this->session->userdata('adminname')!=''){

        $this->load->model('Main_model');
        $videodata['h'] = $this->Main_model->get_video();
		
        $num['num'] = $this->Main_model->get_data();
        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dashboard', $videodata+$num);
		$this->load->view('footer');
	}else{
	
		redirect(base_url().'welcome');
		}
	}

	public function logout(){

		$this->session->unset_userdata('adminname');
		$this->session->sess_destroy();
		redirect(base_url().'welcome');
	
	}

}
