<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personel extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model("ListeModel");
	}


	public function index()
	{

	$listele = $this->ListeModel->select();

	$viewData = array(
		'listele' => $listele);

			$this->load->view('PersonelListe',$viewData); 
	}


	public function delete($id)
	{

		$where = array(
			'Personelid' => $id			
		);

		$delete = $this->ListeModel->delete($where);

		redirect(base_url("Personel"));
	}

	public function insertPage()
	{
		
		$this->load->view('PersonelEkle'); 
	}

	public function insert()
	{
		$isim = $this->input->post("isim");
		$soyisim =  $this->input->post("soyisim");
		$yas =  $this->input->post("yas");
		

		$data = array(
			'isim' => $isim, 
			'soyisim' => $soyisim,
			'yas' => $yas
		);

		$insert = $this->ListeModel->insert($data);	

		if ($insert) {
			redirect(base_url("Personel"));
		}
		else 
			{ redirect(base_url("insertPage")); }

	}

	public function editPage($id)
	{

		$where = array(
			'Personelid' => $id			
		);

		$listele = $this->ListeModel->edit($where);

		$viewData = array('listele' => $listele);		

		$this->load->view("PersonelDuzenle",$viewData);
	}

	public function update($id)
	{
		$isim = $this->input->post("isim");
		$soyisim = $this->input->post("soyisim");
		$yas =  $this->input->post("yas");

		$data = array(
			'isim' => $isim, 
			'soyisim' => $soyisim,
			'yas' => $yas
		);

		$where = array(
			'Personelid' => $id			
		);


		$update = $this->ListeModel->update($where,$data);

		if ($update) {
			redirect(base_url("Personel"));
		}
		else 
			{ redirect(base_url("Personel/update/$id")); }

		
	}
}
