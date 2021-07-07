<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard_model extends CI_Model {





	function ambil($table)

	{

		$this->db->select('*');

		$this->db->from($table);

		$this->db->order_by('id','ASC');

		return $this->db->get()->result();

	}
	function ambil_where($table,$field,$id)

	{

		$this->db->select('*');

		$this->db->from($table);
		$this->db->where($field, $id);

		$this->db->order_by('id','ASC');

		return $this->db->get()->result();

	}

	function delete($id,$table)

	{

		$this->db->where('id',$id);

		return $this->db->delete($table);



	}
	function delete_kuisioner($id,$table)

	{

		$this->db->where('pengisi',$id);

		return $this->db->delete($table);



	}

	function insert($table,$data)

	{

		return $this->db->insert($table,$data);

	}

	function getid($id,$table)

	{

		return $this->db->get_where($table,['id'=>$id])->row();

	}

	function update($data,$id,$table)

	{

		$this->db->set($data);

		$this->db->where('id',$id);

		return $this->db->update($table);


	}
	public function join($select,$table,$table2,$join)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table2,$join);
		return $this->db->get();

	}

	



}

?>