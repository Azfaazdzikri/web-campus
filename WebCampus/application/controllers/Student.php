<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Student extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model('Student_model');
}
public function index()
{
$data['student'] = $this->Student_model->GetStudent();
		$this->load->view('admin/v_student', $data);
}
public function edit_data_student($nim)
{
$student=$this->Student_model->GetStudent("where nim = '$nim'");
$data=array(
"nim" => $student[0]['nim'],
"name" => $student[0]['name'],
"semester" => $student[0]['semester'],
"major" => $student[0]['major'],
);
$this->load->view('admin/v_edit_student',$data);
}
public function do_update_student()
{
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
$nim = $_POST['nim'];
$name = $_POST['name'];
$semester = $_POST['semester'];
$major = $_POST['major'];
$data_update = array(
'nim' => $nim,
'name' => $name,
'semester' => $semester,
'major' => $major
);
$where = array ('nim'=>$nim);
$table = "student";
$hasil = $this->Student_model->UpdateData($table,$data_update,$where);
if ($hasil>=1) {
redirect('student');
} else {
echo "insert data gagal";
}
}
public function delete_student($nim)
{
$where = array('nim' => $nim);
$data = $this->Student_model->DeleteData('student',$where);
if ($data>=1) {
redirect('student');
}
}
public function proses_registrasi(){
		$data=[
			'nim' => $this->input->post('nim'),
			'name' => $this->input->post('name'),
			'semester' => $this->input->post('semester'),
            'major' => $this->input->post('major'),
            'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
		];
		$insert=$this->Student_model->Register($data);
		if($insert){
			redirect('student');
		}else{
			redirect('student');
		}
	}
function user(){
    redirect('user');
    }
}