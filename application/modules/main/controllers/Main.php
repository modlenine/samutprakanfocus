<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MX_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        date_default_timezone_set("Asia/Bangkok");
    }
    

    public function index()
    {
        $this->load->view("templates/header");
        $this->load->view("index");
        $this->load->view("templates/footer");
    }

    public function contactus()
    {
        $this->load->view("templates/header");
        $this->load->view("contactus");
        $this->load->view("templates/footer");
    }

}

/* End of file Controllername.php */






?>