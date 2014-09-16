<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Coupon_Model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
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

    public function GetDetail($coupon_id)
    {
        $query = $this->db->get_where('coupon', array('coupon_id' => $coupon_id));
        return $query->row();
    }

    public function GetShopCoupon($shop_id)
    {
        $query = $this->db->get_where('coupon', array('shop_id' => $shop_id));
        return $query->result();
    }

    public function GetShopCouponList($num=10, $from=0)
    {
        $this->db->order_by("add_time", "desc");
        $query = $this->db->get('coupon', $num, $from);
        return $query->result();
    }
}