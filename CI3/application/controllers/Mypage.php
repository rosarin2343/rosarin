<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

	public function index()
	{
		$this->load->view('mycss');
		$this->load->view('mypage1_');
		$this->load->view('myjs');
	}

	public function index2()
	{
		$this->load->view('mycss');
		$this->load->view('mypage_profile_2');
		$this->load->view('myjs');
	}
	public function index3()
	{
		$this->load->view('mycss');
		$this->load->view('mypage_perform_3');
		$this->load->view('myjs');
	}
	public function index4()
	{
		$this->load->view('mycss');
		$this->load->view('mypage_activity_4');
		$this->load->view('myjs');
	}
}
