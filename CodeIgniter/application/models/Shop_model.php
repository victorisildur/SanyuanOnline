<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Shop_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function AddShop($info)
    {
        $this->db->insert('shop', $info);
		//return shop_id
		$this->db->select('shop_id');
		$this->db->from('shop');
		$this->db->where($info);
		$query = $this->db->get();
		return $query->row();
    }

    public function EditShop($shop_id, $info)
    {
        $this->db->update('shop', $info, array('shop_id' => $shop_id));
    }

    public function DeleteShop($shop_id)
    {
		$this->db->where('shop_id', $shop_id);
        $this->db->delete('shop');
    }
	//获取数据库中所有信息
    public function GetDetail($shop_id)
    {
        $query = $this->db->get_where('shop', array('shop_id' => $shop_id));
        return $query->row();
    }
	//获取必要信息用于首页和优惠券
    public function GetBasic($shop_id)
    {
        $this->db->select('shop_id, shop_name, shop_addr, shop_tel, shop_img');
        $query = $this->db->get_where('shop', array('shop_id' => $shop_id));
        return $query->row();
    }	
	//老店
    public function getOldHotShops($num=10, $from=0){
        $this->db->select('shop_id, shop_name, shop_img');
        $this->db->order_by("shop_date", "desc");
        $query = $this->db->get_where('shop', array('shop_status' => 1, 'is_old' =>1), $num, $from);
        return $query->result();
    }
    public function getOldNormalShops($num=10, $from=0){
        $this->db->select('shop_id, shop_name, shop_img');
        $this->db->order_by("shop_date", "desc");
        $query = $this->db->get_where('shop', array('shop_status' => 0, 'is_old' =>1), $num, $from);
        return $query->result();
    }
	//新店
	public function getNewHotShops($num=10, $from=0){
        $this->db->select('shop_id, shop_name, shop_img');
        $this->db->order_by("shop_date", "desc");
        $query = $this->db->get_where('shop', array('shop_status' => 1, 'is_old' =>0), $num, $from);
        return $query->result();
    }
    public function getNewNormalShops($num=10, $from=0){
        $this->db->select('shop_id, shop_name, shop_img');
        $this->db->order_by("shop_date", "desc");
        $query = $this->db->get_where('shop', array('shop_status' => 0, 'is_old' =>0), $num, $from);
        return $query->result();
    }
	//for admin
	public function GetShopList()
	{
		$this->db->select('*');
        $this->db->order_by("shop_date", "desc");
		$this->db->from('shop');
        $query = $this->db->get();
        return $query->result();
	}
}