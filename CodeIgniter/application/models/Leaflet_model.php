<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Leaflet_Model extends CI_Model {
	public function __construct() {
        $this->load->database();
    }
	
	public function getAllLeaflets() {
		$this->db->select('*');
		$this->db->from('leaflet');
		$this->db->order_by("add_time", "desc");
		$query = $this->db->get();
		return $query->result();		
	}
	
	public function getHireLeaflets() {
		$this->db->select('*');
		$this->db->from('leaflet');
		$this->db->where('type',0);
		$this->db->order_by("add_time", "desc");
		$query = $this->db->get();
		return $query->result();		
	}
	public function getHouseLeaflets() {
		$this->db->select('*');
		$this->db->from('leaflet');
		$this->db->where('type',1);
		$this->db->order_by("add_time", "desc");
		$query = $this->db->get();
		return $query->result();		
	}
	public function getHousekeepLeaflets() {
		$this->db->select('*');
		$this->db->from('leaflet');
		$this->db->where('type',2);
		$this->db->order_by("add_time", "desc");
		$query = $this->db->get();
		return $query->result();		
	}
	public function getEduLeaflets() {
		$this->db->select('*');
		$this->db->from('leaflet');
		$this->db->where('type',3);
		$this->db->order_by("add_time", "desc");
		$query = $this->db->get();
		return $query->result();		
	}
	public function getSechandLeaflets() {
		$this->db->select('*');
		$this->db->from('leaflet');
		$this->db->where('type',4);
		$this->db->order_by("add_time", "desc");
		$query = $this->db->get();
		return $query->result();		
	}
	
	public function getDetail($leaflet_id) {
		$this->db->select('*');
		$this->db->from('leaflet');
		$this->db->order_by("add_time", "desc");
		$this->db->where( array('leaflet_id' => $leaflet_id) );
		$query = $this->db->get();
		return $query->row();		
	}
	
	public function addLeaflet($info) {
		$this->db->insert('leaflet', $info);
	}
	
	public function editLeaflet($leaflet_id,$info) {
		$this->db->update('leaflet', $info, array('leaflet_id' => $leaflet_id));
	}
}