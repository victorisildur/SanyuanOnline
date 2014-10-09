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
        return $this->db->insert('shop', $info);
    }

    public function EditShop($shop_id, $info)
    {
        $this->db->update('shop', $info, array('shop_id' => $shop_id));
    }

    public function DeleteShop($shop_id)
    {
        $this->db->delete('shop', array('shop_id' => $shop_id));
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

    public function GetHotShopList($num=10, $from=0)
    {
        $this->db->select('shop_id, shop_name, shop_img');
        $this->db->order_by("shop_date", "desc");
        $query = $this->db->get_where('shop', array('shop_status' => 1), $num, $from);
        return $query->result();
    }

    public function GetNewShopList($num=10, $from=0)
    {
        $this->db->select('shop_id, shop_name, shop_img');
        $this->db->order_by("shop_date", "desc");
        $query = $this->db->get_where('shop', array('shop_status' => 0), $num, $from);
        return $query->result();
    }
}