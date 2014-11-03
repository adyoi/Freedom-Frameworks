<?php if(empty($_SERVER['HTTP_REFERER'])) return 0;

class Login extends FF_Controller {
	
	function __construct() {

		parent::__construct();
		
		$this->load->model('Login');
		
	}
	
	public function index() {
		
		$this->view->page('login/index');
	
	}
	
	function login() {
	
		$this->Login->loginin();
	
	}
	
	function logout() {
	
		$this->Login->loginout();
	
	}

}

/* File_name : ./controllers/login.php */
/* Freedom Frameworks Login_Controller */