<?php

class model_login extends ci_model {

    public function login($username,$password) {
        $check = $this->db->get_where('login',array('username'=>$username,'password'=>md5($password)));
        if($check->num_rows()>0){
			return 1; //satu =sukses
		}else{
			return 0; //nol = gagal
		}
    }

	 function tampil_data(){
		 return $this->db->get('login');
	 }
    
   function ambil_data($id){
	   $param =array('id_login'=>$id);
	   return $this->db->get_where('login',$param);
   }
}
