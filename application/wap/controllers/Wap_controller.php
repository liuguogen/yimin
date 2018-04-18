<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wap_controller extends CI_Controller {

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
	private $limit = 10;
	public function __construct()
	{


		parent::__construct();

		$data=$this->Home_model->getRow('*','setting',array(),0,1);
		$this->config->set_item('home',$data);
		
	}
	public function index()
	{
		$activity_data = $this->Home_model->getList('*','activity');
		$popular_data = $this->Home_model->getList('*','popular');
		$case_data = $this->Home_model->getList('*','casetable');
		$news_data = $this->Home_model->getList('*','news');
		$this->load->view('home/index',array('activity_data'=>$activity_data,'popular_data'=>$popular_data,'case_data'=>$case_data,'news_data'=>$news_data));
	}


	public function newsList()
	{
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
		
		$this->load->view('home/newslist',$data);
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
		$data['hot']= $this->Home_model->getList('activity_id,title','activity',array(),0,3,'create_time desc');
		$this->load->view('home/detail',$data);
	}
}
