<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        $this->load->model("login_model" , "login");
    }
    

    public function index()
    {
        return false;
    }

    public function checklogin()
    {
        $this->login->linelogin();
    }

    public function linelogin()
    {
        $this->login->linelogin();
    }

    public function callback()
    {
        $this->load->view("callback");
    }

}

/* End of file Controllername.php */



?>