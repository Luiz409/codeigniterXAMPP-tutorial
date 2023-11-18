<?php

class Search_model extends CI_Model{
    
        public function search($busca)
        {
            if ($busca == "") {
                return array();
            }

            $busca = $this->input->post('busca');
            $this->db->like('name', $busca);
            return $this->db->get('tb_games')->result_array();
        }
}