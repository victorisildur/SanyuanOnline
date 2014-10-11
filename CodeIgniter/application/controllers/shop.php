<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

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
	//for user's page
	public function index()
	{			
        $this->load->model('Shop_Model','shop');
		$data['hot_shops'] = $this->shop->GetHotShopList();
		$data['new_shops'] = $this->shop->GetNewShopList();
		$data['title'] = "知名老店";
		$this->load->view('header_all',$data);
		$this->load->view('shop/shops_all',$data);
		$this->load->view('footer_all',$data);
	}
	
	public function old_shops()
	{			
        $this->load->model('Shop_Model','shop');
		$data['hot_shops'] = $this->shop->getOldHotShops();
		$data['new_shops'] = $this->shop->getOldNormalShops();
		$data['title'] = "知名老店";
		$this->load->view('header_all',$data);
		$this->load->view('shop/shops_all',$data);
		$this->load->view('footer_all',$data);
	}
	public function new_shops()
	{			
        $this->load->model('Shop_Model','shop');
		$data['hot_shops'] = $this->shop->getNewHotShops();
		$data['new_shops'] = $this->shop->getNewNormalShops();
		$data['title'] = "新店开张";
		$this->load->view('header_all',$data);
		$this->load->view('shop/shops_all',$data);
		$this->load->view('footer_all',$data);
	}

    public function detail($shop_id)
    {
        $this->load->model('Shop_Model','shop');
        $this->load->model('Comment_Model','comment');
		$data['shop_id'] = $shop_id;
        $data['details'] = $this->shop->GetDetail($shop_id);
        $data['comments'] = $this->comment->GetComments($shop_id);
		$this->load->view('shop/shop_detail',$data);
    }
	//for user comment action
	public function addComment()
    {
		//encode post data into an array
		$comment = array('comment_content' => $this->input->post('comment_content'),
						 'shop_id'         => $this->input->post('shop_id'),
						 'comment_time'    => date("Y-m-d H:i:s")
						);
		//call Comment_Model's method
		$this->load->Model('Comment_Model','comment_model');
		$this->comment_model->AddComment($comment);
		echo json_encode(array('status'=>'ok'));
    }
	//for admin page
    public function add_shop() {
        $this->load->model('Shop_Model','shop');
        $data = array(
            'shop_name' => $this->input->post('shop_name'),
            'shop_addr' => $this->input->post('shop_addr'),
            'shop_tel' => $this->input->post('shop_tel'),            
            'shop_intro' => $this->input->post('content'),
            'shop_status' => $this->input->post('shop_status'),
			'shop_services' => $this->input->post('shop_services'),
			'is_old' => $this->input->post('is_old'),
            'shop_date' => date("Y-m-d H:i:s")
        );
        $shop = $this->shop->AddShop($data);		
		//link back to admin page, but i wonder if that is good...
		header("Location: /index.php/admin/edit_shop_img/".$shop->shop_id); 
		//exit;
    }
	public function delete_shop($shop_id) {
        $this->load->model('Shop_Model','shop');
        $this->shop->DeleteShop($shop_id);
		header("Location: /index.php/admin");
    }
	public function edit_shop($shop_id) {
        $this->load->model('Shop_Model','shop');
        $info = array(
            'shop_name' => $this->input->post('shop_name'),
            'shop_addr' => $this->input->post('shop_addr'),
            'shop_tel' => $this->input->post('shop_tel'),          
            'shop_intro' => $this->input->post('content'),
            'shop_status' => $this->input->post('shop_status'),
			'shop_services' => $this->input->post('shop_services'),
			'is_old' => $this->input->post('is_old'),
            'shop_date' => date("Y-m-d H:i:s")
        );
        $this->shop->EditShop($shop_id,$info);
		//link back to admin page, but i wonder if that is good...
		header("Location: /index.php/admin"); 
		//exit;
    }
	public function edit_shop_img($shop_id) {
		 $this->load->model('Shop_Model','shop');
		 $info = array(            
            'shop_img' => $this->input->post('shop_img'),
        );
        $this->shop->EditShop($shop_id,$info);
		header("Location: /index.php/admin"); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */