<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller {



	public function index()

	{
		$personel =  $this->db->get("personel")->result();
		$mail =  $this->db->get("mail")->result();
		$telefon =  $this->db->get("telefon")->result();


		$teljoin = $this->db->query("
			SELECT * FROM personel  
			INNER JOIN telefon ON telefon.Personelid = personel.Personelid 
			 -- INNER JOIN mail ON telefon.Personelid = mail.Personelid
			")->result();

		$mailjoin = $this->db->query("
			SELECT * FROM personel  
			INNER JOIN mail ON personel.Personelid = mail.Personelid 
			")->result();

		$where = $this->db->query("
		SELECT * FROM mail,personel,telefon  
		WHERE personel.Personelid = telefon.Personelid
		ORDER BY personel.Personelid ASC
			")->result();

		$uctablojoin = $this->db->query("		
		SELECT * FROM personel,telefon,mail
		WHERE telefon.Personelid = personel.Personelid
		AND mail.Personelid = personel.Personelid ORDER BY personel.Personelid ASC
					")->result();

		$uctabloinnerjoin = $this->db->query("
			SELECT * FROM personel  
			INNER JOIN telefon ON telefon.Personelid = personel.Personelid 
			INNER JOIN mail ON mail.Personelid = personel.Personelid ORDER BY personel.Personelid ASC
			 -- INNER JOIN mail ON telefon.Personelid = mail.Personelid
			")->result();

		$uctabloleftjoin = $this->db->query("
			SELECT * FROM personel  
			LEFT JOIN telefon ON telefon.Personelid = personel.Personelid 
			LEFT JOIN mail ON mail.Personelid = personel.Personelid ORDER BY personel.Personelid ASC
			 -- INNER JOIN mail ON telefon.Personelid = mail.Personelid
			")->result();

		$this->load->model("JoinModel");
		$model = $this->JoinModel->join();		


		$viewData = array(			
			"personel" =>$personel,
			"mail" =>$mail,
			"telefon" =>$telefon,
			"teljoin" =>$teljoin,
			"mailjoin" =>$mailjoin,
			"where" =>$where,
			"uctabloinnerjoin" =>$uctablojoin,
			"uctabloleftjoin" =>$uctabloleftjoin,
			"uctablojoin" =>$uctablojoin,
			"model" =>$model
		);




		$this->load->view('join',$viewData);
	}

	







	




}
