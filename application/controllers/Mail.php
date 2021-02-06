<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model("MailModel");
		$this->load->model("ListeModel");
	}


	public function index()
	{

	$listele = $this->MailModel->select();

	$viewData = array(
		'listele' => $listele);

			$this->load->view('MailListe',$viewData); 
	}


	public function delete($id)
	{

		$where = array(
			'Mailid' => $id			
		);

		$delete = $this->MailModel->delete($where);

		redirect(base_url("Mail"));
	}

	public function insertPage()
	{
		$listele = $this->ListeModel->select();

		$viewData = array(
		'listele' => $listele);

		$this->load->view('MailEkle',$viewData); 
	}

	public function insert()
	{
		$Personelid = $this->input->post("Personelid");
		$MailAdresi =  $this->input->post("MailAdresi");
		

		$data = array(
			'Personelid' => $Personelid, 
			'MailAdresi' => $MailAdresi,
		);

		$insert = $this->MailModel->insert($data);	

		if ($insert) {
			redirect(base_url("Mail"));
		}
		else 
			{ redirect(base_url("insertPage")); }

	}

	public function editPage($id)
	{

		$where = array(
			'Mailid' => $id			
		);

		$listele = $this->MailModel->edit($where);

		$getir = $this->ListeModel->select();

		$viewData = array('listele' => $listele,
		'getir'=>$getir);		

		$this->load->view("MailDuzenle",$viewData);
	}

	public function update($id)
	{
		$Personelid = $this->input->post("Personelid");
		$MailAdresi =  $this->input->post("MailAdresi");
		

		$data = array(
			'Personelid' => $Personelid, 
			'MailAdresi' => $MailAdresi,
		);			

		$where = array(
			'Mailid' => $id			
		);

		echo $Personelid.$MailAdresi;

		print_r($data);
		print_r($where);


	 	$update = $this->MailModel->update($where,$data);

		if ($update) {
			redirect(base_url("Mail"));
		}
		else 
			{ redirect(base_url("Mail/update/$id")); }

		
	}
}
