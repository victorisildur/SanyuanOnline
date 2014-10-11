<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
	//-------------------
	//for shop management
	//-------------------
	public function index()	{
		$this->load->model('Shop_Model','shop');		
		$data['shops'] = $this->shop->GetShopList();
		$data['flag'] = 'shop';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/admin_shop',$data);
		$this->load->view('admin/footer_admin');
	}
    public function add_shop() {		
		$data['flag'] = 'shop';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/admin_shop_addshop',$data);
		$this->load->view('admin/footer_admin');                
    }
    public function edit_shop($shop_id) {
        $this->load->model('Shop_Model','shop');
		$data['shop'] = $this->shop->GetDetail($shop_id);
		$data['flag'] = 'shop';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/admin_shop_editshop',$data);
		$this->load->view('admin/footer_admin');
    }
	public function edit_shop_img($shop_id) {
		$this->load->model('Shop_Model','shop');
		$data['shop'] = $this->shop->GetDetail($shop_id);
		$data['flag'] = 'shop';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/admin_shop_editshopimg',$data);
		$this->load->view('admin/footer_admin');
	}
	public function shop_intro($shop_id) {
		$this->load->model('Shop_Model','shop');
		$data['shop'] = $this->shop->GetDetail($shop_id);
		$data['flag'] = 'shop';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/admin_shop_intro',$data);
		$this->load->view('admin/footer_admin');
	}
	public function shop_comments($shop_id) {
		$this->load->model('Comment_model','comments');
		$data['comments'] = $this->comments->GetComments($shop_id,10,0);
		$data['flag'] = 'shop';
		$data['shop_id'] = $shop_id;
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/admin_shop_comments',$data);
		$this->load->view('admin/footer_admin');
	}
	
	//---------------------
	//for coupon management
	//---------------------
	public function manage_coupon() {
		$this->load->model('Coupon_Model','coupon');
		$data['coupons'] = $this->coupon->GetCouponList();
		$data['flag'] = 'coupon';
		$this->load->view('admin/header_admin',$data);		
		$this->load->view('admin/admin_coupon',$data);
		$this->load->view('admin/footer_admin');
	}
	public function edit_coupon($coupon_id) {
		$this->load->model('Coupon_Model','coupon');
		$data['coupon'] = $this->coupon->GetDetail($coupon_id);
		$data['flag'] = 'coupon';
		$this->load->view('admin/header_admin',$data);		
		$this->load->view('admin/admin_coupon_edit',$data);
		$this->load->view('admin/footer_admin');
	}
	public function add_coupon() {
		$this->load->model('Shop_Model','shop');	
		//need all shops for selection
		$data['shops'] = $this->shop->GetShopList();
		$data['flag'] = 'coupon';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/admin_coupon_add',$data);
		$this->load->view('admin/footer_admin');
	}
	//----------------------
	//for leaflet management
	//----------------------
	public function manage_leaflet() {
		$this->load->model('Leaflet_Model','leaflet');
		$data['leaflets'] = $this->leaflet->getAllLeaflets();
		$data['flag'] = 'leaflet';
		$this->load->view('admin/header_admin',$data);		
		$this->load->view('admin/admin_leaflet',$data);
		$this->load->view('admin/footer_admin');
	}
	public function add_leaflet() {
		$data['flag'] = 'leaflet';
		$this->load->view('admin/header_admin',$data);		
		$this->load->view('admin/admin_leaflet_add',$data);
		$this->load->view('admin/footer_admin');
	}
	public function edit_leaflet($leaflet_id) {
		$this->load->model('Leaflet_Model','leaflet');
		$data['leaflet'] = $this->leaflet->getDetail($leaflet_id);
		$data['flag'] = 'leaflet';
		$this->load->view('admin/header_admin',$data);		
		$this->load->view('admin/admin_leaflet_edit',$data);
		$this->load->view('admin/footer_admin');
	}
	public function leaflet_content($leaflet_id) {
		$this->load->model('Leaflet_Model','leaflet');
		$data['leaflet'] = $this->leaflet->getDetail($leaflet_id);
		$data['flag'] = 'leaflet';
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/admin_leaflet_content',$data);
		$this->load->view('admin/footer_admin');
	}
}