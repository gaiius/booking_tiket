<?php 
class login extends CI_Controller {
	
	function __construct(){
		parent:: __construct ();
		$this->load->model('model_login');
		
	}
	
	public function login(){
	
	if(isset($_POST['submit'])){
		
	$username = $this->input->post('username');
	$password= $this->input->post('password');
	$hasil = $this->model_login->login($username,$password);	
	if($hasil== 1){
			$this->db->where('username',$username);
			$this->db->update('login',array('terakhir_login'=>date('Y-m-d')));
			$this->session->userdata(array('status_login'=>'sukses','username'=>$username));
			redirect('welcome');
	}else{
		redirect('login/login');
		
	}
		
	}else{
		validasi_session();
		$this->load->view('login');
	}
	
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('login/login');
	}
}