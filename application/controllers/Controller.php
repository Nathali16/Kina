<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');


class Controller extends CI_Controller
{
   public function __construct() {
      parent::__construct();
      $this->load->model('Model');
      
      if(!$this->ion_auth->logged_in()) $this->load->view('pages/menu');
       else $this->load->view('pages/menu_logout');
   }

   
   public function index()
   {
 
        $this->load->view("pages/hlavniStrana");
      
   }

	  
 
}

