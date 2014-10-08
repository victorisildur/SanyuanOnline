<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{		
        $this->load->model('Shop_Model','shop');
        $this->load->model('Coupon_Model','coupon');        
		$data['hot_shops'] = $this->shop->GetHotShopList();;        
		$this->load->view('fame_shop',$data);
	}

    public function detail($shop_id)
    {
        $this->load->model('Shop_Model','shop');
        $this->load->model('Comment_Model','comment');
        $this->shop->GetDetail($shop_id);
        $this->comment->GetComments($shop_id);
    }

    //public function coupon
    public function coupon($coupon_id)
    {
        $this->load->model('Coupon_Model','coupon');
        $this->coupon->GetDetail($coupon_id);
    }

    public function shop_coupon($shop_id)
    {
        $this->load->model('Coupon_Model','coupon');
        $this->coupon->GetShopCoupon($shop_id);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */