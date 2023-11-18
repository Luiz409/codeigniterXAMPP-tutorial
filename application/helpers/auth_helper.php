<?php

function permission(){
    $CI = & get_instance();
    $user = $CI->session->userdata('user');
    if(!$user){
        $CI-> session->set_flashdata('danger', 'Você precisa estar logado');
        redirect('login');
    }

    return $user;
}