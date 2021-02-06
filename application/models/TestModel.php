<?php 

class TestModel extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

public function select()
{
	    return $this->db->query("SELECT /*telefon.Telefonid tablo ismi.sütunismi yazılır sadece cagırılacak kolanlar veya * yani tümü seçilir*/ *
	    	/*  ,telefon.TelefonNo as ornekisim   = Bu sekilde elyas yani as verebiliriz sonra bunu cagırıken kullnıırız */ 
	    	 from telefon 
	    	INNER JOIN personel ON telefon.Personelid=personel.Personelid ")->result();		
}

public function insert($data,$table)
{
	// $test =  $this->db->insert($data,$table);
	
	   $geridon = $this->db->insert($table,$data);

  		 return $geridon;   
  		}

 public function delete($where,$table)
  		 {
  		 	 $geridon = $this->db->delete($table,$where);

  		 	return $geridon;
  		 } 	

public function edit($where)
{
	    return $this->db->query("SELECT * from telefon INNER JOIN personel ON telefon.Personelid=personel.Personelid where Telefonid=$where")->row();		

}

public function updateData($where, $data,$table)
    {
      return  $this->db->where($where)->update($table, $data);
    }

public function selectt($table)
{
	    return $this->db->query("SELECT  * from $table")->result();		
}

public function editt($table,$where)
{
	    return $this->db->query("SELECT  * from $table where Telefonid=$where")->row();		
}

  


}