<?php
class Login_model extends CI_Model{
	//cek nip dan password user
	function auth_petugas($username,$password){
		$query=$this->db->query("SELECT * FROM petugas WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek nim dan password level
	function auth_student($username,$password){
		$query=$this->db->query("SELECT * FROM student WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

}
