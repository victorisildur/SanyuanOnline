<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//public function coupon
class Coupon extends CI_Controller {
	public function index()
	{
		$this->load->model('Coupon_Model','coupon');
		$data['coupons']=$this->coupon->GetCouponList();
		$this->load->view('coupons_all',$data);
	}
    public function coupon_detail($coupon_id)
    {
        $this->load->model('Coupon_Model','coupon');
        $data['coupon'] = $this->coupon->GetDetail($coupon_id);
		$this->load->view('coupon_detail',$data);
    }

    public function shop_coupon($shop_id)
    {
        $this->load->model('Coupon_Model','coupon');
        $this->coupon->GetShopCoupon($shop_id);
    }
}