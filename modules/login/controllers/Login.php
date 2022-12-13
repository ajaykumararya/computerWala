<?php
class Login extends MY_Controller{
    function __construct(){
        parent :: __construct();
    }
    function admin(){
        $this->load->view('admin/login');
    }
}


?>