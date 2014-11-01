<?php

class FF_Session {

	function __construct() {

	}

	public static function init() {

		@session_start();
		@session_regenerate_id();

	}
	
	public static function set($key,$value) {

		$_SESSION[$key] = $value;
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);

	}

	public static function get($key) {

		if (isset($_SESSION['HTTP_USER_AGENT'])){
		
				if ($_SESSION['HTTP_USER_AGENT'] == md5($_SERVER['HTTP_USER_AGENT'])){
					
						if(isset($_SESSION[$key])){
							return $_SESSION[$key];
						}
				}
				
		}else{
		
			$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
			
		}

	}

	public static function destroy() {
		
		@session_destroy();
		@session_regenerate_id();

	}

}

/* File_name : ./libs/Session.php */
/* Freedom Frameworks Session_Library */
