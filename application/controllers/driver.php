<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class driver extends CI_Controller {
	public function index()
	{
		$this->load->view('sign_in');
	}
        
        public function hello(){
            echo 'hello???????';
        }
        
        public function sign(){
            $this->load->view('sign_in');
        }
}
