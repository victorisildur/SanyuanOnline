<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('admin');
	}
    public function add_shop()
    {
        $this->load->model('Shop_Model','shop');

        $data = array(
            'shop_name' => $this->input->post('shop_name'),
            'shop_addr' => $this->input->post('shop_addr'),
            'shop_tel' => $this->input->post('shop_tel'),
            'shop_img' => $this->input->post('shop_img'),
            'shop_intro' => $this->input->post('shop_intro'),
            'shop_status' => $this->input->post('shop_status'),
            'shop_date' => 'NOW()'
        );
        return $this->shop->AddShop($data);
    }

    public function edit_shop()
    {
        $this->load->model('Shop_Model','shop');

        $data = array(
            'shop_name' => $this->input->post('shop_name'),
            'shop_addr' => $this->input->post('shop_addr'),
            'shop_tel' => $this->input->post('shop_tel'),
            'shop_img' => $this->input->post('shop_img'),
            'shop_intro' => $this->input->post('shop_intro'),
            'shop_status' => $this->input->post('shop_status'),
            'shop_date' => 'NOW()'
        );
        return $this->shop->AddShop($this->input->post('shop_id'), $data);
    }
    public function delete_shop()
    {
        $this->load->model('Shop_Model','shop');
        return $this->shop->DeleteShop($this->input->post('shop_id'));
    }
	
	
	
}