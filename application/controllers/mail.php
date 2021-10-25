<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mail extends CI_Controller {

	public function __construct(){
		parent::__construct();
        
	}
	public function email_register()
	{
		$this->package_model->email_register('my_053562121@hotmail.com','sss');
	}

}
