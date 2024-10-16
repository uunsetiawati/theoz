<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{
		$this->template->load('template/template','home');
	}

	public function profil()
	{
		$this->template->load('template/template','profil');
	}

	public function pengurus()
	{
		$this->template->load('template/template','pengurus');
	}

	public function layanan()
	{
		$this->template->load('template/template','layanan');
	}

	public function contact()
	{
		$this->template->load('template/template','contact');
	}
}