<?php

class ListeModel extends CI_Model {

	function __construct()
	{
		parent:: __construct();
		$this->table = "personel";
	}

	public function select()
	{

		$geridon =  $this->db->get($this->table)->result();

		return $geridon;		
	}

	public function delete($where)
	{

		$geridon = $this->db->where($where)->delete($this->table);

		return $geridon;		
	}

	public function insert($data)
	{

		$geridon = $this->db->insert($this->table,$data);

		return $geridon;		
	}

	public function edit($where)
	{

		$geridon =  $this->db->where($where)->get($this->table)->row();

		return $geridon;		
	}

		public function update($where=array(),$data=array())
	{

		$geridon =  $this->db->where($where)->update($this->table,$data);

		return $geridon;		
	}

	}
