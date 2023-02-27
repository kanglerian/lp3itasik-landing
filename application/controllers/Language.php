<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Language extends CI_Controller
{

	public function change($lang)
	{
	  $this->session->set_userdata('language', $lang);
    redirect('/');
	}

}
