<?php 

/**
 * 
 */
class DenemeMod extends CI_Model
{
    public function JoinSelect($table,$table2)
    {
        //return yoksa ekrana bir sey basmaz
        return $this->db->query("SELECT * from $table 
	    	INNER JOIN $table2 ON $table.Personelid=$table2.Personelid ")->result();
    }

    public function count($table)
    {
       return $this->db->query("SELECT * FROM $table")->num_rows();
    }
	
	public function select($table)
	{
        return $this->db->query("SELECT * FROM $table")->result();
	}

	public function insert($table,$where)
    {
        return $this->db->insert($table,$where);
    }
    public function delete($where,$table)
    {
        return $this->db->where($where)->delete($table);
    }

    public function edit($table,$table2,$where)
    {
        return $this->db->query("SELECT * from $table 
	    	INNER JOIN $table2 ON $table.Personelid=$table2.Personelid where Telefonid=$where")->row();
    }

    public function update($where,$data,$table)
    {
        return  $this->db->where($where)->update($table,$data);
    }







}