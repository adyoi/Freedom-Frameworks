<?php if(empty($_SERVER['HTTP_REFERER'])) return 0;

class Error extends FF_Controller {

	function __construct () {
	
		parent::__construct();

	}
	
	public function index () {
		
		$this->view->msg = "This page doesn't exist";
		$this->view->page('error/index',0);
	
	}

}

/* File_name : ./controllers/error.php */
/* Freedom Frameworks Error_Controller */