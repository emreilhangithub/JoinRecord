<?php /**
 * 
 */
class Lib 
{

	function __construct()
	{
		$this -> CI  = &  get_instance (); 
		$this->CI->load->model("TestModel");
	}
	
	        public function ucuncu_method()
        {
        return	$this->CI->TestModel->select(); //veri geldi print_r ile test işlemi yapıldı

        }

        public function insert($data,$table)
        {

        return	$this->CI->TestModel->insert($data,$table); //veri geldi print_r ile test işlemi yapıldı

        }

         public function delete($where,$table)
        {

        return	$this->CI->TestModel->delete($table,$where); 

        }

         public function edit($where)
        {

        return  $this->CI->TestModel->edit($where); 

        }

           public function  updateData($where,$table,$data)
    {
        return $this->CI->TestModel->updateData($where,$table,$data);
    }

    public function selectt($table)
        {

        return  $this->CI->TestModel->selectt($table); 

        }

        public function editt($table,$where)
        {

        return  $this->CI->TestModel->editt($table,$where); 

        }




}