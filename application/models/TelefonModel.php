<?php

class TelefonModel extends CI_Model {

	function __construct()
	{
		parent:: __construct();
		$this->table = "telefon";
	}

	public function select()
	{

		$this->db->select("telefon.Telefonid,personel.isim,telefon.TelefonNo");
		$this->db->from("telefon");
	    $this->db->join('personel', 'personel.Personelid  = telefon.Personelid');
	    return $this->db->get()->result();			
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
		$this->db->select("telefon.Telefonid,personel.isim,telefon.TelefonNo");
		$this->db->from("telefon");
		$this->db->where($where);
	    $this->db->join('personel', 'personel.Personelid  = telefon.Personelid');
	    return $this->db->get()->row();				
	}

		public function update($where=array(),$data=array())
	{

		$geridon =  $this->db->where($where)->update($this->table,$data);

		return $geridon;		
	}

	}
