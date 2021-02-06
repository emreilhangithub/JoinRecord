<?php

class MailModel extends CI_Model {

	function __construct()
	{
		parent:: __construct();
		$this->table = "mail";
	}

	public function select($select="*")
	{

		$this->db->select("mail.Mailid,personel.isim,mail.MailAdresi");
		$this->db->from($this->table);
	    $this->db->join('personel', 'personel.Personelid  = mail.Personelid');
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
		$this->db->select("mail.Mailid,personel.isim,mail.MailAdresi,personel.Personelid");
		$this->db->from($this->table);
		$this->db->where($where);
		$this->db->join('personel', 'personel.Personelid  = mail.Personelid');
		 return $this->db->get()->row();

				
	}

		public function update($where=array(),$data=array())
	{

		$geridon =  $this->db->where($where)->update($this->table,$data);

		return $geridon;		
	}

	}
