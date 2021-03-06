<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Website extends CI_Controller
{
	public function index( )
	{
		$data["page"]="index";
        $this->load->view("frontend",$data);
	}
    
	public function explore( )
	{
		$data["page"]="explore";
        $this->load->view("frontend",$data);
	}
	public function feed( )
	{
		$data["page"]="feed";
        $data["videos"]=$this->video_model->getallvideos();
        $this->load->view("frontend",$data);
	}

	public function description()
	{
        $id=$this->input->get('id');
        $data["video"]=$this->video_model->getvideobyid($id);
        $data["videotags"]=$this->video_model->getvideotagsbyvideo($id);
//        print_r($data);
		$data["page"]="description";
        $this->load->view("frontend",$data);
	}

	public function preview( )
	{
		$data["page"]="preview";
        $data["videos"]=$this->video_model->getallvideos();
        $this->load->view("frontend",$data);
	}

}
?>