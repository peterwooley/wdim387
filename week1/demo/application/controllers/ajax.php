<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	/**
	 * Renders the date in seconds since the beginning of the Unix Epoch as JSON.
	 */
	public function date() {
		echo json_encode(array("date" =>date("U")));
	}
}
