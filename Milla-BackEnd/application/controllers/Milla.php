<?php
/**
* 
Main  Milla  Controller
*/
class Milla extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('logged_in') != TRUE)
		// {
		// 	redirect('login');			
		// }
	}
	/* Constructor Ends Here */
	public function index()
	{
		$this->load->view('index');
	}
	/* Main Index File Ends Here */	
	public function users()
	{
		$Data['Users'] = $this->Milla_model->DBSelectAll('users');
		$this->load->view('users',$Data);
	}
	public function lost()
	{
		$WhatHappend = array('what'=>0);
		$Data['Losts'] = $this->Milla_model->DBSelects('whathappend',$WhatHappend);
		$this->load->view('lost',$Data);
	}
	public function found()
	{
		$WhatHappend = array('what'=>1);
		$Data['Found'] = $this->Milla_model->DBSelects('whathappend',$WhatHappend);
		$this->load->view('found',$Data);
	}
	public function claims()
	{
		$Data['Claims'] = $this->Milla_model->Claims();
		$this->load->view('claims',$Data);
	}
}
?>
