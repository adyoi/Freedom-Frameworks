<?php if(empty($_SERVER['HTTP_REFERER'])) return 0;

class Index extends FF_Controller {
	
	function __construct () {
	
		parent::__construct();

	}
	
	public function index () {
		
		$this->view->page('index/index',0);

	}
	
	public function param($arg) {
		
		$this->view->msg($arg[0] . ' , ' . $arg[1]. ' , ' . $arg[2]. ' , ' . $arg[3]. ' , ' . $arg[4]);

	}
	
	public function history(){
	
		$this->view->page('history/index',0);
		
	}

}

/* File_name : ./controllers/index.php */
/* Freedom Frameworks Index_Controller */
