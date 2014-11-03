<?php if(empty($_SERVER['HTTP_REFERER'])) return 0;

class About extends FF_Controller {
	
	function __construct () {

		parent::__construct();

	}
	
	public function index () {
	
		$this->view->page('about/index',0);
	
	}

}

/* File_name : ./controllers/about.php */
/* Freedom Frameworks About_Controller */