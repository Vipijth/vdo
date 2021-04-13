<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
    
    public function upload()
	{
        if($this->session->userdata('adminname')!=''){

        $this->load->model('Main_model');
        $classdata['h'] = $this->Main_model->get_class();
        $subjectdata['z'] = $this->Main_model->get_subject();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('video_upload',$classdata+$subjectdata);
		$this->load->view('footer');
        }	else{
	
            redirect(base_url().'welcome');
        }
	}

    public function list()
	{
        if($this->session->userdata('adminname')!=''){
        $this->load->model('Main_model');
        $videodata['h'] = $this->Main_model->get_video();
        

        $num['num'] = $this->Main_model->get_data();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('video_list',$videodata+$num);
		$this->load->view('footer');
    }	else{
	
        redirect(base_url().'welcome');
        }
	}

    public function folders()
	{
        if($this->session->userdata('adminname')!=''){
        $this->load->model('Main_model');
        $classdata['h'] = $this->Main_model->get_class();
        $subjectdata['z'] = $this->Main_model->get_subject();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('folders',$classdata+$subjectdata);
		$this->load->view('footer');
    }	else{
	
    	redirect(base_url().'welcome');
    }
	}
    public function create_label()
	{
        $this->load->helper('form');
		$this->load->library('form_validation');
	
		$class=$this->input->post('class');
		$subject=$this->input->post('subject');
        //echo $class.$subject;




        if($class!=''){
            $dt=date('d-F-Y');
           
            $data = array(
                'name' => $class,
                  'create_date' => $dt,
                 
            );
            
		$this->load->model('Main_model');
        $this->Main_model->create_class($data );
    }


    if($subject!=''){
        $dt=date('d-F-Y');
       
        $data = array(
            'name' => $subject,
              'create_date' => $dt,
             
        );
        
    $this->load->model('Main_model');
    $this->Main_model->create_subject($data );
}


redirect( base_url().'folder');

    }


public function upload_video(){


    $this->load->helper('url');



    if($this->input->post('title') != NULL ){ 
        $data = [];
   
        $count = count($_FILES['files']['name']);
      echo $count;
        for($i=0;$i<$count;$i++){
            echo $count;
          if(!empty($_FILES['files']['name'][$i])){
      
            $_FILES['file']['name'] = $_FILES['files']['name'][$i];
            $_FILES['file']['type'] = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['files']['error'][$i];
            $_FILES['file']['size'] = $_FILES['files']['size'][$i];
    
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'mp4|avi|mpeg|webm';
            $config['max_size'] = '1325000';
            $config['file_name'] = $_FILES['files']['name'][$i];
     
            $this->load->library('upload',$config); 
      
            if($this->upload->do_upload('file')){
              $uploadData = $this->upload->data();
              $filename = $uploadData['file_name'];
     
              $data['totalFiles'][] = $filename;

print_r($data);
              $class=$this->input->post('class');
              $subject=$this->input->post('subject');
              $classname = substr($class, strpos($class, "^") + 1);  
              $classarr = explode("^", $class, 2);
              $classid = $classarr[0];  

              $subjectname = substr($subject, strpos($subject, "^") + 1);  
              $subjectarr = explode("^", $subject, 2);
              $subjectid = $subjectarr[0];  
              $dt=date('d-F-Y');
		  	$datas = array(
		
                'title	' => $this->input->post('title'),
                 'class	' => $classname,
                'subject	' => $subjectname,
                'class_id	' => $classid,
                'subject_id	' => $subjectid,
                'video'=> $filename,
                'create_date' => $dt,
          );
          print_r($datas);
          $this->load->model('Main_model');
          $this->Main_model->create_video($datas );
         
            }
            else{
                $this->session->set_flashdata('errors','Something Went Wrong..! Allowed Video Formats Only.');
                redirect( base_url().'video_upload');
            }
          }
     
        }
    redirect( base_url().'video_list');
      }
             
   
    
     }

public function delete_video(){
    $id= $this->input->post('id');
	

    $this->load->model('Main_model');
$this->Main_model->delete_video($id );
redirect( base_url().'video_list');
}
}



	
