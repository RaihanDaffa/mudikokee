<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Data_user extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function submit($data){
		$this->db->insert("user", $data);
	}

	function gets(){
		return $this->db->get('user')->result();
	}

	function get($id){}
	function add(){}
	function del($id){
		$this->db->delete('user', ["id"=>$id]);
	}
	function edit($id){}
}