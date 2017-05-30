<?php

class model_film extends ci_model {

    public function tampil_list_data() {
        $query = "select * from film";
        return $this->db->query($query);
    }

    
    
}
