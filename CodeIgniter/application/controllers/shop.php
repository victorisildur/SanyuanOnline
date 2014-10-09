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

	public function index()
	{		
        $this->load->model('Shop_Model','shop');    
		$data['hot_shops'] = $this->shop->GetHotShopList();
		$data['new_shops'] = $this->shop->GetNewShopList();
		$this->load->view('shops_all',$data);
	}

    public function detail($shop_id)
    {
        $this->load->model('Shop_Model','shop');
        $this->load->model('Comment_Model','comment');
		$data['shop_id'] = $shop_id;
        $data['details'] = $this->shop->GetDetail($shop_id);
        $data['comments'] = $this->comment->GetComments($shop_id);
		$this->load->view('shop_detail',$data);
    }
	
	public function addComment()
    {
		//encode post data into an array
		$comment = array('comment_content' => $this->input->post('comment_content'),
						 'shop_id'         => $this->input->post('shop_id'),
						 'comment_time'    => date("Y-m-d H:i:s")
						);
		//call Comment_Model's method
		$this->load->Model('Comment_Model','comment_model');
		return $this->comment_model->AddComment($comment);
		echo json_encode(array('status'=>'ok'));
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */