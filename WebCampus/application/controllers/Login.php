<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_user=$this->login_model->auth_petugas($username,$password);

        if($cek_user->num_rows() > 0){
						$data=$cek_user->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         }else{
		         	$cek_student=$this->login_model->auth_student($username,$password);
		         	if($cek_student->num_rows() > 0){
		         	$data=$cek_student->row_array();
		         		$this->session->set_userdata('masuk',TRUE);
		            $this->session->set_userdata('akses','student');
					$this->session->set_userdata('ses_nim',$data['nim']);
		            $this->session->set_userdata('ses_name',$data['name']);
		            redirect('user');
				}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }

    }
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}