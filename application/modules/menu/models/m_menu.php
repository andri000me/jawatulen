<?php

class M_menu extends CI_Model{
function __construct(){
	parent:: __construct();
}
	
	function input_data($data)
	{
		$this->db->insert('inputbarang',$data);  
	}
	
	function tampil_data(){
		return $this->db->get('inputbarang');
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
}