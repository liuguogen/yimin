<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {
	private $limit = 10;
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
		$case['case'] = $this->Home_model->getList('case_id,title','casetable');
		$hot['hot'] = $this->Home_model->getList('activity_id,title','activity');
		$this->config->set_item('hot',$hot);
		$this->config->set_item('case',$case);
		$data=$this->Home_model->getRow('*','setting',array(),0,1);
		$this->config->set_item('home',$data);
		
		if($this->agent->is_mobile()) {
			redirect(base_url().'wap');
		}
	}
	public function index()
	{

		$activity_data = $this->Home_model->getList('*','activity');
		$popular_data = $this->Home_model->getList('*','popular');
		$news_data = $this->Home_model->getList('*','news');
		$case_data = $this->Home_model->getList('*','casetable');
		$this->load->view('home/index',array('activity_data'=>$activity_data,'popular_data'=>$popular_data,'news_data'=>$news_data,'case_data'=>$case_data));
	}

	public function activityDeatail()
	{
		$id = $this->uri->segment(2);
		$type = $this->uri->segment(3);
		if($type=='yujian') {
			$table ='news';
			$id_type = 'news_id';
			$url_type = 'news';
			$data['header'] = '裕鉴动态';
			$data['url'] = site_url('list/yujian');
		}elseif ($type=='case') {
			$table ='casetable';
			$id_type = 'case_id';
			$url_type = 'case';
			$data['header'] = '成功案例';
			$data['url'] = site_url('list/case');
		}else {
			$table = 'activity';
			$id_type  = 'activity_id';
			$url_type = 'activity';
			$data['header'] = '移民热点';
			$data['url'] = site_url('list/activity');
		}
		
		$data['activity_data']=$this->Home_model->getRow('*',$table,array($id_type=>$id));
		//上一篇 下一篇
		$prev_data= $this->Home_model->query("select {$id_type},title from {$table} where {$id_type}<".$id." order by {$id_type} desc limit 1");
		$data['prev_data'] = $prev_data ?  "<a href='".site_url('activity/'.$prev_data[$id_type].'/'.$url_type.'')."'>".$prev_data['title']."</a>"  : "没有了";
		$next_data = $this->Home_model->query("select {$id_type},title from {$table} where {$id_type}>".$id." order by {$id_type} desc limit 1");
		$data['next_data'] = $next_data ?  "<a href='".site_url('activity/'.$next_data[$id_type].'/'.$url_type.'')."'>".$next_data['title']."</a>"  : "没有了";
		$this->load->view('home/activity',$data);
	}
	public function newsDeatail()
	{
		$news_id=$this->uri->segment(2);
		$data['activity_data']=$this->Home_model->getRow('*','news',array('news_id'=>$news_id));
		//上一篇 下一篇
		$prev_data= $this->Home_model->query("select news_id,title from news where news_id<".$news_id." order by news_id desc limit 1");
		$data['prev_data'] = $prev_data ?  "<a href='".site_url('activity/'.$prev_data['news_id'].'')."'>".$prev_data['title']."</a>"  : "没有了";
		$next_data = $this->Home_model->query("select news_id,title from news where news_id>".$news_id." order by news_id desc limit 1");
		$data['next_data'] = $next_data ?  "<a href='".site_url('news/'.$next_data['news_id'].'')."'>".$next_data['title']."</a>"  : "没有了";
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
	public function listDetail()
	{

		//$id = $this->uri->segment(2);
		$type = $this->uri->segment(2);
		if($type=='yujian') {
			$table ='news';
			$id_type = 'news_id';
			$data['header'] = '裕鉴动态';
		}elseif ($type=='case') {
			$table ='casetable';
			$id_type = 'case_id';
			$data['header'] = '成功案例';
		}else {
			$table = 'activity';
			$id_type  = 'activity_id';
			$data['header'] = '移民热点';
		}
		
		$total=$this->Home_model->getCount($table); 
		$this->load->library('pagination');
		$limit = $this->limit;
		$config['base_url'] = site_url('list/'.$type).'?page=p';
		$config['total_rows'] = $total;
		$config['per_page'] = $limit;
		$config['full_tag_open'] = '<div class="pagination">'; // 分页开始样式
		$config['full_tag_close'] = '</div>'; // 分页结束样式
		$config['first_link'] = '首页'; // 第一页显示
		$config['last_link'] = '末页'; // 最后一页显示
		$config['next_link'] = '下一页 '; // 下一页显示
		$config['prev_link'] = '上一页'; // 上一页显示
		$config['cur_tag_open'] = ' <a class="current">'; // 当前页开始样式
		$config['cur_tag_close'] = '</a>'; // 当前页结束样式
		$config['num_links'] = 2;// 当前连接前后显示页码个数
		$config['page_query_string']=TRUE;
		//$config['uri_segment'] = 4;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string']=TRUE;
		$config['use_page_numbers'] = TRUE;
		$per_page=$this->input->get('per_page');
		$start=$per_page?($per_page-1)*$limit:0; 
		
		$data['row']=$this->Home_model->getList('*',$table,array(),$start,$limit,'create_time DESC');
		foreach ($data['row'] as $key => &$value) {
			if($type =='yujian') {
				$value['url'] = site_url('activity/'.$value['news_id'].'/yujian');
			}elseif ($type=='case') {
				$value['url'] = site_url('activity/'.$value['case_id'].'/case');
			}else {
				$value['url'] = site_url('activity/'.$value['activity_id'].'/activity');
			}
		}
		$this->pagination->initialize($config);
		$data['page_links']=$this->pagination->create_links();
		$this->load->view('home/list',$data);
	}
	
}
