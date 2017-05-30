<?php 
class Tiket extends CI_Controller {
	
	function __construct(){
		parent:: __construct ();
		$this->load->model('model_jadwal');
		$this->load->model('model_kursi');
		$this->load->model('model_film');
		
	}
	
	public function index (){
		
		$data['kursi'] = $this->model_kursi->tampil_list_data();
		$data['film'] = $this->model_film->tampil_list_data();
		$data['jadwal'] = $this->model_jadwal->tampil_list_data();
		$this->load->view('design/header');
		$this->load->view('tiket/tampil_tiket',$data);
		$this->load->view('design/footer');
		
	}
	
        
	
}