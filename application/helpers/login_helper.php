<?php
function validasi_login(){
	$CI= & get_instance();
	$session=$CI->session->userdata('status_login');
	if($session!='sukses'){
		redirect('login/login');
	}
}	
function validasi_session(){
	$CI= & get_instance();
	$session=$CI->session->userdata('status_login');
	if($session=='sukses'){
		redirect('welcome');
	}
	}


?>

