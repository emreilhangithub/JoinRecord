<?php

class JoinModel extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}

	public function join()
	{	
		//telefon.Telefonid,personel.isim,telefon.TelefonNo
		$this->db->select("*");
		$this->db->from("telefon");
	    $this->db->join('personel', 'personel.Personelid  = telefon.Personelid');
	    return $this->db->get()->result();

				
	}
}