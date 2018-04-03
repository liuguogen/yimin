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
		$data=$this->Home_model->getRow('*','setting');
		$this->config->set_item('home',$data);
		if($this->agent->is_mobile()) {
			redirect(base_url().'wap');
		}
	}
	public function index()
	{

		$activity_data = $this->Home_model->getList('*','activity');
		$popular_data = $this->Home_model->getList('*','popular');
		$this->load->view('home/index',array('activity_data'=>$activity_data,'popular_data'=>$popular_data));
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

	public function popularDetail()
	{
		$popular_id=$this->uri->segment(2);
		$data['popular_data'] = $this->Home_model->getRow('*','popular',array('popular_id'=>$popular_id));
		$this->load->view('home/popular',$data);
	}

	public function projects()
	{   
		$data['data'] = $this->Home_model->getList('*','popular',array(),0,-1,'orderby desc');
		$this->load->view('home/projects',$data);
	}

	public function getProjects()
	{
		$post = $this->input->post();

		if($post['city']=='cityall' && $post['objective']=='objectiveall'){
			$filter=array();
		}elseif ($post['city']!='cityall' && $post['objective']=='objectiveall') {
			$filter=array('city'=>$post['city']);
		}elseif ($post['city']=='cityall' && $post['objective']!='objectiveall') {
			$filter=array('objective'=>$post['objective']);
		}else {
			$filter=array('city'=>$post['city'],'objective'=>$post['objective']);
		}
		
		$data = $this->Home_model->getList('*','popular',$filter,0,-1,'orderby desc');
		if(!$data) {
			echo 'no';exit;
		}
		$html = '';
		foreach ($data as $key => $value) {
			$html.= '<div class="project clearfix project-hot">';
			$html.='<a href="'.site_url('popular/'.$value['popular_id']).'" target="_blank" rel="nofollow">';
			$html.='<div class="left"><img alt="" src="../../../'.$value['thumb'].'" /></div>';
			$html.='<div class="right">
							<div class="title">
								<div class="flag">
									<img src="../../../'.$value['icon'].'" alt="" />
								</div>
								<h3>'.$value['title'].'</h3>
							</div>
							<div class="type types">
								
							</div>
							<div class="detail">
								<p class="text">
										'.mb_substr($value['brief'],0,120,'utf8').'
								</p>
							</div>
							<div class="time">
								<i></i>办理周期：<span>'.$value['cycle'].'</span>
							</div>
							<div class="money">
								<i></i>资产要求：<span>'.$value['price'].'</span>
							</div>
							<p class="link">查看详情 <i></i></p>
						</div>
					</a>';
			$html.='<div class="btns">
						
					</div>	
					<i class="hot"></i>				
				</div>';
		}

		echo $html;exit;
	}
	
}
