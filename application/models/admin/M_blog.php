<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model {
	public function GetBlog()
	{
		$blog =$this->db->query('SELECT * FROM db_struktur_organisasi;');
		return $blog;
	}
	
	public function GetBlogSingle($id)
	{
		$single = $this->db->SELECT('*')
						   -> FROM('db_struktur_organisasi')
						   ->WHERE('id',$id)
						   ->get();
		return $single;
	}

	function GetSingleBlogInfo($id){
        $this->db->select('*');
        $this->db->from('db_struktur_organisasi');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function edit_option($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    }
	//-- insert function
	public function insert($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }

    function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 

    function delete($id,$table){
        $this->db->delete($table, array('id' => $id));
        return;
    }


}

/* End of file M_blog.php */
/* Location: ./application/models/admin/M_blog.php */