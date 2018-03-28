<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

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
	private $limit=10;
	public function __construct()
	{


		parent::__construct();
		if(!$this->input->cookie('admin_id'))
		{

			echo '<script>window.top.location.href="'.site_url('login_controller/index').'"</script>';
        	
        	exit();
		}
	}
	public function index()
	{
		$this->load->view('home/index');
	}

	public function activityList()
	{
		if(!empty($_POST)){
			$keyword=trim($this->input->post('title'));
			$data['title']=$keyword;
			$total=$this->Admin_model->getCount('activity',array('title|like'=>$keyword));
			$filter=array('title|like'=>$keyword);
		}else{
			$keyword='';
			$total=$this->Admin_model->getCount('activity');
			$data['title']=$keyword;
			$filter=array();
		}
		$this->load->library('pagination');
		$limit = $this->limit;
		$config['base_url'] = site_url('Admin_controller/activityList').'?page=p';
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
		
		$data['row']=$this->Admin_model->getList('*','activity',$filter,$start,$limit,'create_time DESC');
		$this->pagination->initialize($config);
		$data['page_links']=$this->pagination->create_links();
		$this->load->view('home/activitylist',$data);
	}
	public function newsList()
	{
		if(!empty($_POST)){
			$keyword=trim($this->input->post('title'));
			$data['title']=$keyword;
			$total=$this->Admin_model->getCount('news',array('title|like'=>$keyword));
			$filter=array('title|like'=>$keyword);
		}else{
			$keyword='';
			$total=$this->Admin_model->getCount('news');
			$data['title']=$keyword;
			$filter=array();
		}

		$this->load->library('pagination');
		$limit = $this->limit;
		$config['base_url'] = site_url('Admin_controller/newsList').'?page=p';
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
		
		$data['row']=$this->Admin_model->getList('*','news',$filter,$start,$limit,'create_time DESC');
		$this->pagination->initialize($config);
		$data['page_links']=$this->pagination->create_links();
		$this->load->view('home/newslist',$data);
	}
	public function addActivity()
	{
			if(IS_POST) {
			$post=$this->input->post();
			$post['create_time']=time();
			if($post['activity_id']!='') {
				$activity_id=$post['activity_id'];
				unset($post['activity_id']);
				
				//更新
				$flag=$this->Admin_model->update('activity',$post,array('activity_id'=>$activity_id));
			}else {
				$flag=$this->Admin_model->insert('activity',$post);
			}


			if($flag) {
				$this->message('保存成功',site_url('Admin_controller/activityList'));
			}else {
				$this->message('保存失败',site_url('Admin_controller/activityList'));
			}
		}else{
			$this->load->view('home/addactivity');
		}

	}
	/**
	**添加新闻
	**/
	public function addNewsList() {
		if(IS_POST) {
			$post=$this->input->post();
			$post['create_time']=time();
			if($post['news_id']!='') {
				$news_id=$post['news_id'];
				unset($post['news_id']);
				//更新除了自己
				if($post['is_recommend']=='1') {
					$this->Admin_model->update('news',array('is_recommend'=>0),array('news_id|notin'=>$news_id));
				}
				//更新
				$flag=$this->Admin_model->update('news',$post,array('news_id'=>$news_id));
			}else {
				$flag=$this->Admin_model->insert('news',$post);
			}


			if($flag) {
				$this->message('保存成功',site_url('Admin_controller/newsList'));
			}else {
				$this->message('保存失败',site_url('Admin_controller/newsList'));
			}
		}else{
			$this->load->view('home/addnews');
		}
	}

	public function editActivity()
	{
		$data['data']=$this->Admin_model->getRow('*','activity',array('activity_id'=>$this->input->get('activity_id')));
		$this->load->view('home/addactivity',$data);
	}

	public function delActivity()
	{
		$flag=$this->Admin_model->delete('activity',array('activity_id'=>$this->input->get('activity_id')));
		if($flag)
		{
			$this->message('删除成功',site_url('Admin_controller/activityList'));

		}
		else
		{
			$this->message('删除失败',site_url('Admin_controller/activityList'));
		}
	}
	/**
	**编辑新闻
	**/
	public function editNews() {
		$data['data']=$this->Admin_model->getRow('*','news',array('news_id'=>$this->input->get('news_id')));
		$this->load->view('home/addnews',$data);
	}
	/**
	**删除新闻
	**/
	public function delNews()
	{
		
		
		$flag=$this->Admin_model->delete('news',array('news_id'=>$this->input->get('news_id')));
		if($flag)
		{
			$this->message('删除成功',site_url('Admin_controller/newsList'));

		}
		else
		{
			$this->message('删除失败',site_url('Admin_controller/newsList'));
		}
	}
	public function welcome() {

		$this->load->view('home/welcome');
	}

	public function setting($value='')
	{
		if(IS_POST) {
			$data=$this->input->post();
			
			
			
			if(isset($data['thumb']) && $data['thumb']){
				$data['thumb']=implode(',',$data['thumb']);
			}
			
			
			$data['create_time']=time();
			if($data['setting_id']!='' && isset($data['setting_id']))
			{
				$setting_id=$data['setting_id'];
				unset($data['setting_id']);
				$flag=$this->Admin_model->update('setting',$data,array('setting_id'=>$setting_id));
			}else {
				$flag=$this->Admin_model->insert('setting',$data);
			}
			
			if($flag) {
				$this->message('保存成功',site_url('Admin_controller/setting'));
			}else {
				$this->message('保存失败',site_url('Admin_controller/setting'));
			}
		}else {
			$rRow=$this->Admin_model->getRow('*','setting');
			//$rRow['core_business']=$rRow['core_business'] ? unserialize($rRow['core_business']) :array();//序列化核心业务
			//$rRow['contactus']=$rRow['contactus'] ? unserialize($rRow['contactus']) :array();//序列化联系我们
			$rRow['thumb']=$rRow['thumb']  ? explode(',',$rRow['thumb']) :array();
			//$rRow['partner_img']=$rRow['partner_img']  ? explode(',',$rRow['partner_img']) :array();
			//$rRow['core_businessImg']=$rRow['core_businessImg'] ? explode(',',$rRow['core_businessImg']) :array();
			$data['data']=$rRow;
			$this->load->view('home/setting',$data);
		}
	}
}
