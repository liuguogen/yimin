<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

  	public function __construct()
	{

		parent::__construct();
	}

	public function index($value='')
	{
		$this->load->view('home/login');
	}


	public function login()
	{
		$username = trim($this->input->post('username'));
		$password = trim($this->input->post('password'));
		if($username == '') {
			echo json_encode(array('code'=>0,'data'=>array(),'msg'=>'ID cannot be empty!'));exit;
		}
		if($password == '') {
			echo json_encode(array('code'=>0,'data'=>array(),'msg'=>'password cannot be empty!'));exit;
		}

		$user_data = $this->Home_model->getRow('member_id,username','members',array('username'=>$username,'password'=>md5($password)));
		if($user_data) {
				$this->input->set_cookie('member_id',$user_data['member_id'],14400);
				$this->input->set_cookie('username',$user_data['username'],14400);
				echo json_encode(array('code'=>1,'data'=>$user_data['username'],'url'=>site_url().'/Index_controller/index'));
		}else {
			echo json_encode(array('code'=>0,'data'=>array(),'msg'=>'ID or password error!'));exit;
		}

	}
}