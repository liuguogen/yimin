<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {

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


		parent::__construct();
		if($this->agent->is_mobile()) {
			redirect(base_url().'wap');
		}
	}
	public function index()
	{

		$activity_data = $this->Home_model->getList('*','activity');
		$this->load->view('home/index',array('activity_data'=>$activity_data));
	}

	public function activityDeatail()
	{
		$activity_id=$this->uri->segment(2);
		$data['activity_data']=$this->Home_model->getRow('*','activity',array('activity_id'=>$activity_id));
		//上一篇 下一篇
		$prev_data= $this->Home_model->query("select activity_id,title from activity where activity_id<".$activity_id." order by activity_id desc limit 1");
		$data['prev_data'] = $prev_data ?  "<a href='".site_url('activity/'.$prev_data['activity_id'].'')."'>".$prev_data['title']."</a>"  : "没有了";
		$next_data = $this->Home_model->query("select activity_id,title from activity where activity_id>".$activity_id." order by activity_id desc limit 1");
		$data['next_data'] = $next_data ?  "<a href='".site_url('activity/'.$next_data['activity_id'].'')."'>".$next_data['title']."</a>"  : "没有了";
		$this->load->view('home/activity',$data);
	}
	
}
