<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telefon extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model("TelefonModel");
		$this->load->model("ListeModel");
	}


	public function index()
	{

	$listele = $this->TelefonModel->select();

	$viewData = array(
		'listele' => $listele);

			$this->load->view('TelefonListe',$viewData); 
	}


	public function delete($id)
	{

		$where = array(
			'Telefonid' => $id			
		);

		$delete = $this->TelefonModel->delete($where);

		redirect(base_url("Telefon"));
	}

	public function insertPage()//SELECTİ ÇAGIRDIK BURADA JOİNE GEREK KALMADI
	{
		$listele = $this->ListeModel->select();

		$viewData = array(
		'listele' => $listele);


		$this->load->view('TelefonEkle',$viewData); 
	}

	public function insert()
	{
		$Personelid = $this->input->post("Personelid");
		$TelefonNo =  $this->input->post("TelefonNo");
		

		$data = array(
			'Personelid' => $Personelid, 
			'TelefonNo' => $TelefonNo,
		);

		$insert = $this->TelefonModel->insert($data);	

		if ($insert) {
			redirect(base_url("Telefon"));
		}
		else 
			{ redirect(base_url("insertPage")); }

	}

	public function editPage($id)
	{			

		$where = array(
			'Telefonid' => $id					
		);

		$listele = $this->TelefonModel->edit($where);
		$getir = $this->ListeModel->select();//BURADA YİNE LİSTEMODELİ CAGIRDIKKİ JOİN ATMAYALIM

		$viewData = array(
			'listele' => $listele,
			'getir' => $getir	
			);		

		$this->load->view("TelefonDuzenle",$viewData);
	}

	public function update($id)
	{
		$Personelid = $this->input->post("Personelid");
		$TelefonNo = $this->input->post("TelefonNo");

		$data = array(
			'Personelid' => $Personelid, 
			'TelefonNo' => $TelefonNo
		);

		$where = array(
			'Telefonid' => $id			
		);


		$update = $this->TelefonModel->update($where,$data);

		if ($update) {
			redirect(base_url("Telefon"));
		}
		else 
			{ redirect(base_url("Telefon/update/$id")); }

		
	}
}
