<?php 

class DenemeLib 
{
	function __construct()
	{
        $this-> CI =& get_instance();
        $this->CI->load->model('DenemeMod');
	}

	public function JoinSelect($table,$table2)
	{
	 return $this->CI->DenemeMod->JoinSelect($table,$table2);
	}

    public function count($table)
    {
        return $this->CI->DenemeMod->count($table);
    }
    public function select($table)
    {
        return $this->CI->DenemeMod->select($table);
    }
    public function insert($table,$where)
    {
        return $this->CI->DenemeMod->insert($table,$where);
    }
    public function delete($where,$table)
    {
        return $this->CI->DenemeMod->delete($where,$table);
    }
    public function edit($table,$table2,$where)
    {
        return $this->CI->DenemeMod->edit($table,$table2,$where);
    }
    public function update($where,$table,$data)
    {
        return $this->CI->DenemeMod->update($where,$table,$data);
    }
}