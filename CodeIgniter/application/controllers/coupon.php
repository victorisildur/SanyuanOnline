<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//public function coupon
class Coupon extends CI_Controller {
	//---------------
	//for user's page
	//---------------
	public function index() {		
	}
	//five coupon pages
	public function food_coupon() {
		$this->load->model('Coupon_Model','coupon');
		$data['coupons']=$this->coupon->getFoodCoupons();
		$data['title']="美食餐饮";
		$this->load->view('header_all',$data);
		$this->load->view('coupon/coupons_all',$data);
		$this->load->view('footer_all');
	}
	public function clothes_coupon() {
		$this->load->model('Coupon_Model','coupon');
		$data['coupons']=$this->coupon->getClothesCoupons();
		$data['title']="衣饰衣厅";
		$this->load->view('header_all',$data);
		$this->load->view('coupon/coupons_all',$data);
		$this->load->view('footer_all');
	}
	public function amuse_coupon() {
		$this->load->model('Coupon_Model','coupon');
		$data['coupons']=$this->coupon->getAmuseCoupons();
		$data['title']="休闲娱乐";
		$this->load->view('header_all',$data);
		$this->load->view('coupon/coupons_all',$data);
		$this->load->view('footer_all');
	}
	public function trip_coupon() {
		$this->load->model('Coupon_Model','coupon');
		$data['coupons']=$this->coupon->getTripCoupons();
		$data['title']="酒店旅游";
		$this->load->view('header_all',$data);
		$this->load->view('coupon/coupons_all',$data);
		$this->load->view('footer_all');
	}
	public function other_coupon() {
		$this->load->model('Coupon_Model','coupon');
		$data['coupons']=$this->coupon->getOtherCoupons();
		$data['title']="更多优惠券";
		$this->load->view('header_all',$data);
		$this->load->view('coupon/coupons_all',$data);
		$this->load->view('footer_all');
	}
	
	//detail page
    public function coupon_detail($coupon_id) {
        $this->load->model('Coupon_Model','coupon');
        $data['coupon'] = $this->coupon->GetDetail($coupon_id);
		$this->load->view('coupon/coupon_detail',$data);
    }
	//coupons of the same shop
    public function shop_coupon($shop_id)
    {
        $this->load->model('Coupon_Model','coupon');
        $this->coupon->GetShopCoupon($shop_id);
    }
	//---------------
	//for admin page
	//---------------
	public function add_coupon() {
		$this->load->model('Coupon_Model','coupon');
        $info = array(
            'shop_id' => $this->input->post('shop_id'),
            'start_time' => $this->input->post('start_time'),
            'end_time' => $this->input->post('end_time'),			
            'coupon_content' => $this->input->post('coupon_content'),            
            'add_time' => date("Y-m-d H:i:s")
        );
        $this->coupon->AddCoupon($info);
		header("Location: /index.php/admin/manage_coupon"); 
	}
	public function delete_coupon($coupon_id) {
		$this->load->model('Coupon_Model','coupon');
		$this->coupon->DeleteCoupon($coupon_id);
		header("Location: /index.php/admin/manage_coupon");
	}
	
	public function edit_coupon($coupon_id) {
		$this->load->model('Coupon_Model','coupon');
		$info = array(
			'coupon_content' => $this->input->post('coupon_content'),
			'start_time' => $this->input->post('start_time'),
			'end_time' => $this->input->post('end_time'),
		);
		$this->coupon->EditCoupon($coupon_id,$info);
		header("Location: /index.php/admin/manage_coupon");
	}
}