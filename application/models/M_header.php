<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_header extends CI_Model {

	public function GetHeader()
	{
		return $this->db->get('db_header')->result_array();
	}

	public function GetAbout()
	{
		return $this->db->get('db_about')->result_array();
	}

	public function GetPortfolio()
	{
		return $this->db->get('db_struktur_organisasi')->result_array();
	}

	public function insert($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }
}

/* End of file m_header.php */
/* Location: ./application/models/m_header.php */