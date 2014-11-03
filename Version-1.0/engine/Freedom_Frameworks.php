<?php

/* 
 *	Freedom Frameworks Version 1.0 Beta
 *	This Frameworks built in Native PHP 5.5.15
 *	------------------------------------------
 *	Started_On : 11 Oct 2014 19:14
 *	File_name  : ./engine/Freedom_Frameworks.php
 *	--------------------------------------------
 *	Adi Apriyanto
 */
 
class Freedom {

	function __construct(){

		$this->FreedomFrameworksInit();

		$source = $_SERVER['QUERY_STRING'];
		//$source = filter_var($source, FILTER_SANITIZE_URL);
		//$source = parse_url($source, PHP_URL_PATH);
		$source = str_replace('url=', null, $source);
		$source = explode('/', rtrim($source, '/'));
		
		//print_r($source);

		if(empty($source[0])) {
			
			$scriptname = $_SERVER['SCRIPT_NAME'];
			$requesturi = $_SERVER['REQUEST_URI'];
			
			$base_controller = pathinfo($scriptname, PATHINFO_FILENAME);
			
			$base =  substr_replace($requesturi, '', null, strlen($scriptname));
			$base = explode('/', rtrim($base, '/'));
			
			$param_controller = isset($base[1]) ? $base[1] : null;
			
			$parame = null;

			for($i=2; $i<count($base); $i++):

				if($i):

					$parame[] = isset($base[$i]) ? $base[$i] : null;

				endif;

			endfor;
			
			//print_r($parame);
			
			$file_controller = 'controllers/' . $base_controller . '.php';
			
			if(file_exists($file_controller)):
			
				require $file_controller;
				
				$controller = new $base_controller;
			
				if (method_exists($controller, $param_controller)):

					$controller->{$param_controller}($parame);

				else:

					$controller->index();

				endif;
			
			else:

					require 'controllers/error.php';
						$controller = new Error();
						$controller->index();
					return false;
					exit;
			
			endif;
			
		}else{
		
			$base_controller  = isset($source[0]) ? $source[0] : null;
			$param_controller = isset($source[1]) ? $source[1] : null;

			if(!empty($base_controller)):
				
				$file_controller = 'controllers/' . $base_controller . '.php';
				
				if(file_exists($file_controller)):
				
					require $file_controller;
					
					$controller = new $base_controller;
					
					$param = null;
					
					for($i=2; $i<count($source); $i++):

							if($i):

								$param[] = isset($source[$i]) ? $source[$i] : null;

							endif;

					endfor;

					$param = isset($param) ? $param : null;

						if (method_exists($controller, $param_controller)):

							$controller->{$param_controller}($param);

						else:

							$controller->index();

						endif;

				else:

						require 'controllers/error.php';
							$controller = new Error();
							$controller->index();
						return false;
						exit;
				
				endif;
				
			else:

				require 'controllers/index.php';
					$controller = new Index();
					$controller->index();
				return false;
				exit;

			endif;
		
		}
	
	}

	private function FreedomFrameworksInit() {

		// Freedom Frameworks (MVC)
		require 'engine/Freedom_Controller.php';
		require 'engine/Freedom_View.php';
		require 'engine/Freedom_Model.php';
		
	}

}

/*
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *	
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *	
 *	You should have received a copy of the GNU General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *	
 */