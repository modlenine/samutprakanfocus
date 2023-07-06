<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        date_default_timezone_set("Asia/Bangkok");
    }
    

    public function index()
    {
        echo "test";
    }

}

/* End of file Controllername.php */




?>