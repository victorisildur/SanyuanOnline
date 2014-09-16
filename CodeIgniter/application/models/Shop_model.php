<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Shop_Model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function AddShop($info)
    {
        $this->db->insert('shop', $info);
    }

    public function EditShop($shop_id, $info)
    {
        $this->db->update('shop', $info, array('shop_id' => $shop_id));
    }

    public function DeleteShop($shop_id)
    {
        $this->db->delete('shop', array('shop_id' => $shop_id));
    }

    public function GetDetail($shop_id)
    {
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