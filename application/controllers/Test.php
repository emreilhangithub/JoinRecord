<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		 $this->load->model("TestModel");
		 $this->load->model('ListeModel');
		 $this->load->library('Lib');
		
	}

	public  function json()
    {

    $fgc = file_get_contents("https://jsonplaceholder.typicode.com/posts")   ;
    $json1 = json_decode($fgc,true);

    //echo "<pre>";
    //print_r($json1);
    //exit();


    $viewData = array('json1'=>$json1);



    $this->load->view("Json",$viewData);




    }


	public function selectt() //joinsiz select
	{
		$listele = $this->lib->selectt('telefon');

		$viewData = array('listele' => $listele);	

		print_r($viewData);	

	}


	public function index() //selecet joinli olan
	{
		$listele = $this->lib->ucuncu_method();

		//print_r($listele); return ile veriyi gonderdik ve ekrana geldi


	 	$viewData = array('listele' => $listele);	 	


	// $listele = $this->TestModel->select();

	// $viewData = array(
	// 	'listele' => $listele);

	$this->load->view('TestListe',$viewData); 
	
	}


public function insertPage()
	{
		$listele = $this->ListeModel->select();
		$viewData = array(
		'listele' => $listele);

		$this->load->view('TestEkle',$viewData); 		


	}

public function insert()
	{

		// $Personelid = $this->input->post('Personelid');
		// $TelefonNo = $this->input->post('TelefonNo');

		$eklemeislemi = array(
			'Personelid' => $this->input->post('Personelid'),
			'TelefonNo' => $this->input->post('TelefonNo') 
		);

		 $this->lib->insert($eklemeislemi,"telefon");
		//$this->load->view('TestEkle',$viewData); 

	}	

public function delete($id)
	{
		//echo $id;

		$where = array('Telefonid' => $id);


		 $this->lib->delete("telefon",$where); //istesern where yerine array de direk atarsın



		//$this->load->view('TestEkle',$viewData); 

	}	

public function updatePage($where) //edit page joinli olan 
	{		

			$select = $this->ListeModel->select();

			$listele = $this->lib->edit($where);

			$viewData = array('listele' => $listele,
			'select'=>$select);

			$this->load->view('TestDuzenle',$viewData); 
	}	



// public function updatePage($where) //editPage 1 join atılmadan once
// 	{		

// 			$select = $this->ListeModel->select();

// 			$listele = $this->lib->editt('telefon',$where);

// 			$viewData = array('listele' => $listele,
// 			'select'=>$select);

// 			$this->load->view('TestDuzenle',$viewData); 
// 	}	




public function update($id)//id TestDuzenle.php yani viewden gelen parametre
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

		//print_r($data);
		//print_r($where);


	  $test = $this->lib->updateData($where,$data,'telefon');
	   echo $test;
		
		

	}	




}