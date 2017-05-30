<?php

class model_jadwal extends ci_model {

    public function tampil_list_data() {
        $query = "select * from jadwal";
        return $this->db->query($query);
    }

    
 
}
