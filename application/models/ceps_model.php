<?php

class Ceps_model extends CI_Model {

    public function index(){
        return $this->db->get ('tb_ceps')->result_array();
    }

    public function store($game){
        $this->db->insert('tb_ceps', $game);
    }

    public function show($id){
        return $this->db->get_where('tb_ceps', array('cep' => $id))->row_array();
    }

    public function update($id, $game){
        $this->db->where('cep', $id);
        return $this->db->update('tb_ceps', $game);
    }

    public function destroy($id){
        $this->db->where('cep', $id);
        return $this->db->delete('tb_ceps');
    }
}