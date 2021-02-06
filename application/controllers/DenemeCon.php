<?php 

/**
 * 
 */
class DenemeCon extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        //$this->load->model('DenemeMod');//cagırdık deneme modelini
        $this->load->library('DenemeLib');
    }

    public function index()//Anasayfayı olusturduk
	{
		//echo "Anasayfa = İndex php";
       //$listele = $this->DenemeMod->select('telefon');//model ismi aynı olacak
        //print_r($listele);

        $listele = $this->denemelib->JoinSelect('telefon','personel'); //küçük harflerle yazılır libraryi ismis
        $count  = $this->denemelib->count('telefon');

        $viewData = array(
            'count' =>$count,
            'listele' =>$listele
        );

        $this->load->view('DenemeListe',$viewData);

	}

    public function insertPage()
    {
        //echo "insertPage";

        $listele = $this->denemelib->select('personel');

        $viewData = array('listele'=>$listele);


        $this->load->view('DenemeEkle',$viewData);
    }

    public function insert()
    {
        //echo "insert";
       $Personelid = $this->input->post('Personelid');
       $TelefonNo = $this->input->post('TelefonNo');

       $eklemeislemi = array(
           'Personelid' => "$Personelid",//column1,value1
           'TelefonNo' => "$TelefonNo"
       );
       //print_r($ekle);

       $bitir = $this->denemelib->insert('telefon',$eklemeislemi);

       if ($bitir)
       {
           redirect(base_url("DenemeCon"));
       }
       else {
           echo "Ekleme İşlemi Başarısızdır";
       }

    }

    public function delete($id)
    {
       //echo "delete";
        //echo $id;

        $sil = array('Telefonid'=>$id);

        $this->denemelib->delete($sil,'telefon');

    }

    public function updatePage($id)
    {
       // echo "updatePage";
        //echo $id;

        $listele = $this->denemelib->edit('telefon','personel',$id);

        $getir= $this->denemelib->select('personel');

        $viewData = array('listele'=>$listele,
        'getir'=>$getir
        );

        $this->load->view('denemeduzenle',$viewData);

    }

    public function update($id)
    {
    //echo "Kaydet";
    $Personelid = $this->input->post('Personelid');
    $TelefonNo = $this->input->post('TelefonNo');

    $where = array(
        'Personelid'=>$Personelid,
        'TelefonNo'=>$TelefonNo
    );

    $duzenle = array(
        'Telefonid'=>$id
    );

    //print_r($where);
    //print_r($duzenle);

        $this->denemelib->update($duzenle,$where,'telefon');

    //echo $id.$Personelid.$TelefonNo;

    }

	


}