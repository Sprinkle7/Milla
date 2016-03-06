<?php

class Milla_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function DBINSERT($table,$data)
	{
		$Execution = $this->db->insert($table,$data);
		if ($Execution) {
			return true;
		}
		else {
			return false;
		}
	}
	public function DBSelectAllOrder($table)
	{
		$this->db->select('*')->from($table)->order_by('position','ASC');
		$Query = $this->db->get();
		if ($Query->num_rows()>0) {
			return $Query->result();
		}
		else{
			return false;
		}
	}
	public function DBSelect($table,$where)
	{
		$this->db->where($where);
		$this->db->select('*')->from($table);
		$Query = $this->db->get();
		if ($Query->num_rows()>0) {
			return $Query->row();
		}
		else{
			return false;
		}
	}
	public function DBSelects($table,$where)
	{
		$this->db->where($where);
		$this->db->select('*')->from($table);
		$Query = $this->db->get();
		if ($Query->num_rows()>0) {
			return $Query->result();
		}
		else{
			return false;
		}
	}
	public function DBSelectAll($table)
	{
		$this->db->select('*')->from($table);
		$Query = $this->db->get();
		if ($Query->num_rows()>0) {
			return $Query->result();
		}
		else{
			return false;
		}
	}
	public function DBDelete($table,$where)
	{
			$this->db->where($where);
			$query = $this->db->delete($table);
			if ($query) {
				return true;
			}
	}
	public function DBUpdate($table,$Data,$where)
	{
		$this->db->where($where);
		$this->db->update($table,$Data);
	}
	public function Claims()
	{
		$Query = $this->db->query("
				  SELECT * FROM `claims`
				  JOIN `users`
				  ON `claims`.`user_id` = `users`.`user_id`
				  JOIN `whathappend`
				  ON `claims`.`wh_id` = `whathappend`.`id`
				");
		return $Query->result();
	}
}
?>