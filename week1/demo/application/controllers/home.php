<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		// Renders the view (just a .php file) stored in views/home.php.
		$this->load->view('home');
	}
}
