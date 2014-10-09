<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Coupon_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function AddCoupon($info)
    {
        $this->db->insert('coupon', $info);
    }

    public function DeleteCoupon($coupon_id)
    {
        $this->db->delete('coupon', array('coupon_id' => $coupon_id));
    }

    public function EditCoupon($coupon_id, $info)
    {
        $this->db->update('coupon', $info, array('coupon_id' => $coupon_id));
    }
	 
	public function GetCouponList($num=10, $from=0)
    {
        $this->db->select('coupon_id, shop_id, coupon_content, start_time, end_time');
        $this->db->order_by("add_time", "desc");
        $query = $this->db->get('coupon', $num, $from);
        return $query->result();
    }
	
    public function GetDetail($coupon_id)
    {
		$this->db->select('*');
		$this->db->from('coupon');
		$this->db->join('shop', 'coupon.shop_id = shop.shop_id');
        $this->db->where('coupon_id' , $coupon_id);
		$query = $this->db->get();
        return $query->row();
    }

    public function GetShopCoupon($shop_id, $all=0)
    {
        $sql = "select * from coupon where shop_id = ?";
        if(!$all)
        {
            $sql .= "and end_time > NOW() ";
        }
        $sql .= "order by add_time desc";
        $query = $this->db->query($sql, array($shop_id));
        return $query->result();
    }

    public function GetLatestCoupon($num=10, $from=0)
    {
        $this->db->order_by("add_time", "desc");
        $query = $this->db->get('coupon', $num, $from);
        return $query->result();
    }
}