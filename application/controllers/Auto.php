<?php
class Auto extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    
    // Load Auto public library libraries/Autoclass.php
    //$this->load->library('Autoclass');  

    // Load Database connection
    $this->movie= $this->load->database('default', TRUE);
    $this->movie->query("set schema 'movie'");

    // Load model for this controller.
    $this->load->model('Template_model');

  }

  function template(){
    
     $this->Template_model->generate_json();

  } // template





} // Auto