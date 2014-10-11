<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leaflet extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	//---------------
	//for user pages
	//---------------
	public function index() {		
	}
	//five sub pages
	public function hire_leaflets() {
		$this->load->model('Leaflet_model','leaflet');
		$data['leaflets']=$this->leaflet->getHireLeaflets();
		$data['title']="人才招聘";
		$this->load->view('header_all',$data);
		$this->load->view('leaflet/leaflet_all',$data);
		$this->load->view('footer_all');
	}
	public function house_leaflets() {
		$this->load->model('Leaflet_model','leaflet');
		$data['leaflets']=$this->leaflet->getHouseLeaflets();
		$data['title']="房源信息";
		$this->load->view('header_all',$data);
		$this->load->view('leaflet/leaflet_all',$data);
		$this->load->view('footer_all');
	}
	public function housekeep_leaflets() {
		$this->load->model('Leaflet_model','leaflet');
		$data['leaflets']=$this->leaflet->getHousekeepLeaflets();
		$data['title']="家政服务";
		$this->load->view('header_all',$data);
		$this->load->view('leaflet/leaflet_all',$data);
		$this->load->view('footer_all');
	}
	public function edu_leaflets() {
		$this->load->model('Leaflet_model','leaflet');
		$data['leaflets']=$this->leaflet->getEduLeaflets();
		$data['title']="教育培训";
		$this->load->view('header_all',$data);
		$this->load->view('leaflet/leaflet_all',$data);
		$this->load->view('footer_all');
	}
	public function sechand_leaflets() {
		$this->load->model('Leaflet_model','leaflet');
		$data['leaflets']=$this->leaflet->getSechandLeaflets();
		$data['title']="二手信息";
		$this->load->view('header_all',$data);
		$this->load->view('leaflet/leaflet_all',$data);
		$this->load->view('footer_all');
	}
	//detail page
	public function detail($leaflet_id) {
		$this->load->model('Leaflet_model','leaflet');
		$data['leaflet']=$this->leaflet->getDetail($leaflet_id);		
		$this->load->view('leaflet/header_detail_leaflet',$data);
		$this->load->view('leaflet/leaflet_detail',$data);
		$this->load->view('leaflet/footer_detail_leaflet');
	}
	//---------------
	//for admin pages
	//---------------
	public function add_leaflet() {
		$info = array (
			'type' => $this->input->post('type'),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),	
			'add_time' => date("Y-m-d H:i:s")
		);
		$this->load->model('Leaflet_model','leaflet');
		$this->leaflet->addLeaflet($info);
		header("Location: /index.php/admin/manage_leaflet");
	}
	
	public function edit_leaflet($leaflet_id) {
		$info = array (
			'type' => $this->input->post('type'),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),				
		);
		$this->load->model('Leaflet_model','leaflet');
		$this->leaflet->editLeaflet($leaflet_id,$info);
		header("Location: /index.php/admin/manage_leaflet");
	}
}