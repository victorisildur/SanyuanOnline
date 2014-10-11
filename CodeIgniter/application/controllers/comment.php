<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	//for admin pages
	public function delete_comment($comment_id,$shop_id) {
		$this->load->model('Comment_model','comment');
		$this->comment->DeleteComment($comment_id);
		header("Location: /index.php/admin/shop_comments/".$shop_id);
	}
}