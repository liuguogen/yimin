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


	public function caseList()
	{
		if(!empty($_POST)){
			$keyword=trim($this->input->post('title'));
			$data['title']=$keyword;
			$total=$this->Admin_model->getCount('casetable',array('title|like'=>$keyword));
			$filter=array('title|like'=>$keyword);
		}else{
			$keyword='';
			$total=$this->Admin_model->getCount('casetable');
			$data['title']=$keyword;
			$filter=array();
		}
		$this->load->library('pagination');
		$limit = $this->limit;
		$config['base_url'] = site_url('Admin_controller/caseList').'?page=p';
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
		
		$data['row']=$this->Admin_model->getList('*','casetable',$filter,$start,$limit,'create_time DESC');
		$this->pagination->initialize($config);
		$data['page_links']=$this->pagination->create_links();
		$this->load->view('home/caselist',$data);
	}

	public function addCase()
	{
		if(IS_POST) {
			$post=$this->input->post();
			$post['create_time']=time();
			if($post['case_id']!='') {
				$case_id=$post['case_id'];
				unset($post['case_id']);
				
				//更新
				$flag=$this->Admin_model->update('casetable',$post,array('case_id'=>$case_id));
			}else {
				$flag=$this->Admin_model->insert('casetable',$post);
			}


			if($flag) {
				$this->message('保存成功',site_url('Admin_controller/caseList'));
			}else {
				$this->message('保存失败',site_url('Admin_controller/caseList'));
			}
		}else{
			$this->load->view('home/addacase');
		}
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
				// if($post['is_recommend']=='1') {
				// 	$this->Admin_model->update('news',array('is_recommend'=>0),array('news_id|notin'=>array($news_id)));
				// }
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
	public function editCase()
	{
		$data['data']=$this->Admin_model->getRow('*','casetable',array('case_id'=>$this->input->get('case_id')));
		$this->load->view('home/addacase',$data);
	}

	public function delCase()
	{
		$flag=$this->Admin_model->delete('casetable',array('case_id'=>$this->input->get('case_id')));
		if($flag)
		{
			$this->message('删除成功',site_url('Admin_controller/caseList'));

		}
		else
		{
			$this->message('删除失败',site_url('Admin_controller/caseList'));
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
			if(isset($data['thumb2']) && $data['thumb2']){
				$data['thumb2']=implode(',',$data['thumb2']);
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
			$rRow['thumb']=isset($rRow['thumb'])  ? explode(',',$rRow['thumb']) :array();
			$rRow['thumb2']=isset($rRow['thumb2'])  ? explode(',',$rRow['thumb2']) :array();
			//$rRow['partner_img']=$rRow['partner_img']  ? explode(',',$rRow['partner_img']) :array();
			//$rRow['core_businessImg']=$rRow['core_businessImg'] ? explode(',',$rRow['core_businessImg']) :array();
			$data['data']=$rRow;
			$this->load->view('home/setting',$data);
		}
	}

	/**
	 * 热门项目
	 * @return [type] [description]
	 */
	public function popularList()
	{
		if(!empty($_POST)){
			$keyword=trim($this->input->post('title'));
			$data['title']=$keyword;
			$total=$this->Admin_model->getCount('popular',array('title|like'=>$keyword));
			$filter=array('title|like'=>$keyword);
		}else{
			$keyword='';
			$total=$this->Admin_model->getCount('popular');
			$data['title']=$keyword;
			$filter=array();
		}
		$this->load->library('pagination');
		$limit = $this->limit;
		$config['base_url'] = site_url('Admin_controller/popularList').'?page=p';
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
		
		$data['row']=$this->Admin_model->getList('*','popular',$filter,$start,$limit,'orderby DESC');
		$this->pagination->initialize($config);
		$data['page_links']=$this->pagination->create_links();
		$this->load->view('home/popularlist',$data);
	}

	public function addpopularList()
	{
		if(IS_POST) {
			$post=$this->input->post();
			$post['create_time']=time();
			if($post['popular_id']!='') {
				$popular_id=$post['popular_id'];
				unset($post['popular_id']);
				
				//更新
				$flag=$this->Admin_model->update('popular',$post,array('popular_id'=>$popular_id));
			}else {
				$flag=$this->Admin_model->insert('popular',$post);
			}


			if($flag) {
				$this->message('保存成功',site_url('Admin_controller/popularList'));
			}else {
				$this->message('保存失败',site_url('Admin_controller/popularList'));
			}
		}else{
			$this->load->view('home/addpopular');
		}
	}
	public function editPopular()
	{
		$data['data']=$this->Admin_model->getRow('*','popular',array('popular_id'=>$this->input->get('popular_id')));
		$this->load->view('home/addpopular',$data);
	}
	public function delPopular()
	{
		$flag=$this->Admin_model->delete('popular',array('popular_id'=>$this->input->get('popular_id')));
		if($flag)
		{
			$this->message('删除成功',site_url('Admin_controller/popularList'));

		}
		else
		{
			$this->message('删除失败',site_url('Admin_controller/popularList'));
		}
	}


	public function user()
	{
		if(!empty($_POST)){
			$keyword=trim($this->input->post('username'));
			$data['username']=$keyword;
			$total=$this->Admin_model->getCount('admin',array('username|like'=>$keyword));
			$filter=array('username|like'=>$keyword);
		}else{
			$keyword='';
			$total=$this->Admin_model->getCount('admin');
			$data['username']=$keyword;
			$filter=array();
		}
		$this->load->library('pagination');
		$limit = $this->limit;
		$config['base_url'] = site_url('Admin_controller/user').'?page=p';
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
		
		$data['row']=$this->Admin_model->getList('*','admin',$filter,$start,$limit);
		$this->pagination->initialize($config);
		$data['page_links']=$this->pagination->create_links();
		$this->load->view('home/user',$data);
	}
	/**
	**添加用户
	**/
	public function addUser() {

		if(IS_POST)
		{
			$post=$this->input->post();
			$post['password']=md5($post['password']);
			$post['created_at']=time();
			$post['status']=1;//用户状态 正常
			
        	
        	$flag=$this->Admin_model->insert('admin',$post);
        	if($flag)
        	{
        		$this->message('保存成功',site_url('Admin_controller/user'));
        	}
        	else
        	{
        		$this->message('保存失败',site_url('Admin_controller/addUser'));
        	}
		}
		else
		{
			$this->load->view('home/adduser');
		}
		
	}
	/**
	**修改密码
	**/
	public function editPass() {
		if(IS_POST)
		{

			$post=$this->input->post();
			if($post['confrim_pass']!=$post['password']) {
				$this->message('两次密码不一致',site_url('Admin_controller/editPass/?admin_id='.$post['admin_id']));
			}
			if($post['admin_id']) {
				$admin_id=$post['admin_id'];
				unset($post['admin_id']);
			}
			unset($post['confrim_pass']);
			$post['password']=md5($post['password']);
			
			$flag=$this->Admin_model->update('admin',$post,array('admin_id'=>$admin_id));
			if($flag)
        	{
        		$this->message('修改成功',site_url('Admin_controller/user'));
        	}
        	else
        	{
        		$this->message('修改失败',site_url('Admin_controller/editPass/?admin_id='.$admin_id));
        	}
		}
		else
		{
			$params['admin_id']=$this->input->get('admin_id');
			
			$data['data']=$this->Admin_model->getRow('*','admin',array('admin_id'=>$params['admin_id']));
		
			$this->load->view('home/editpass',$data);
		}
	}


	/**
	**删除用户
	**/
	public function delUser()
	{
		$params['admin_id']=$this->input->get('admin_id');
		
		$flag=$this->Admin_model->delete('admin',array('admin_id'=>$params['admin_id']));
		if($flag)
        {
        		$this->message('删除成功',site_url('Admin_controller/user'));
        }
        else
        {
        		$this->message('删除失败',site_url('Admin_controller/user'));
        }
	}

	/**
	 * 会员管理
	 * @return [type] [description]
	 */
	public function memberList() {
		if(!empty($_POST)){
			$keyword=trim($this->input->post('username'));
			$data['username']=$keyword;
			$total=$this->Admin_model->getCount('members',array('username|like'=>$keyword));
			$filter=array('username|like'=>$keyword);
		}else{
			$keyword='';
			$total=$this->Admin_model->getCount('members');
			$data['username']=$keyword;
			$filter=array();
		}
		$this->load->library('pagination');
		$limit = $this->limit;
		$config['base_url'] = site_url('Admin_controller/memberList').'?page=p';
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
		
		$data['row']=$this->Admin_model->getList('*','members',$filter,$start,$limit,'create_time DESC');
		$this->pagination->initialize($config);
		$data['page_links']=$this->pagination->create_links();
		$this->load->view('home/memberList',$data);
	}
	/**
	 * 添加会员
	 */
	public function addMember() {
		if(IS_POST) {
			$post=$this->input->post();
			$post['create_time']=time();
			$post['password'] =md5($post['password']);
			if($post['member_id']!='') {
				$popular_id=$post['member_id'];
				unset($post['member_id']);
				
				//更新
				$flag=$this->Admin_model->update('members',$post,array('member_id'=>$member_id));
			}else {
				$flag=$this->Admin_model->insert('members',$post);
			}


			if($flag) {
				$this->message('保存成功',site_url('Admin_controller/memberList'));
			}else {
				$this->message('保存失败',site_url('Admin_controller/memberList'));
			}
		}else {
			//$data['data']=$this->Admin_model->getRow('*','admin',array('member_id'=>$this->input->get('member_id')));
			$this->load->view('home/editMember');
		}
	}
	/**
	 * 编辑会员
	 * @return [type] [description]
	 */
	public function editMember() {
		
		    $data['data']=$this->Admin_model->getRow('*','members',array('member_id'=>$this->input->get('member_id')));
			$this->load->view('home/editMember',$data);
		
	}
	/**
	 * 删除会员
	 * @return [type] [description]
	 */
	public function delMember() {
		
		    $flag = $this->Admin_model->delete('members',array('member_id'=>$this->input->get('member_id')));
			if($flag) {
				$this->message('删除成功',site_url('Admin_controller/memberList'));
			}else {
				$this->message('删除失败',site_url('Admin_controller/memberList'));
			}
		
	}
}
