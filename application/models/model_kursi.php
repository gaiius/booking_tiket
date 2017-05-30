<?php

class model_kursi extends ci_model {

    public function tampil_list_data() {
        $query = "select * from kursi";
        return $this->db->query($query);
    }

    
  
}
