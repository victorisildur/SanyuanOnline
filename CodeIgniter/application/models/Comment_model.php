<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Comment_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function AddComment($info)
    {
        $this->db->insert('comments', $info);
    }

    public function DeleteComment($comment_id)
    {
        $this->db->delete('comments', array('comment_id' => $comment_id));
    }

    public function GetComments($shop_id, $num=10, $from=0)
    {
        $query = $this->db->get_where('comments', array('shop_id' => $shop_id), $num, $from);
        return $query->result();
    }

    public function GetShopRank($shop_id)
    {
        $this->db->select_avg('rank');
        $this->db->where('shop_id', $shop_id);
        $query = $this->db->get('comments');
        $row = $query->row();
        return $row->rank;
    }
}