<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['title'] = 'PHP'; 
	}
	public function index()
	{
		$this->load->view('includes/header',$this->data);
		$this->load->view('home',$this->data);
	}
}
