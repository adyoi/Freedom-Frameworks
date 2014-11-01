<?php

class Login_Model extends FF_Model {
	
	function __construct() {

		parent::__construct();
	}
	
	function loginin() {
	
		$login = isset($_POST['login']) ? $_POST['login'] : null;
		$password = isset($_POST['password']) ? $_POST['password'] : null;

		$sth = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = MD5(:password)");
		$sth->execute(array(
		
			':login' => $login,
			':password' => $password
		
		));
		
		//$data = $sth->fetchAll();
		//print_r($data);
		
		$count = $sth->rowCount();
		
		if($count > 0 ) {

			//login
			FF_Session::set('loggedIn',true);
			FF_Session::set('errorLogin',false);
			$this->view->page('index/index');
			//header('location: ' . url);

		}else{

			//error login
			FF_Session::set('loggedIn',false);
			FF_Session::set('errorLogin',true);
			$this->view->page('login/index');
			//header('location: ' . url . '/login');

		}

	}

	function loginout () {
	
		FF_Session::set('loggedIn',false);
		FF_Session::set('errorLogin',false);
		FF_Session::destroy();
		$this->view->page('index/index');
		//header('location: ' . url . '/index');
		//exit;
		
	}

}
