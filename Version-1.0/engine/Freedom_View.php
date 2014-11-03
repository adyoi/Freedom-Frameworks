<?php

/* 
 *	Freedom Frameworks Version 1.0 Beta
 *	This Frameworks built in Native PHP 5.5.15
 *	------------------------------------------
 *	Started_On : 11 Oct 2014 19:14
 *	File_name  : ./engine/Freedom_View.php
 *	--------------------------------------------
 *	Adi Apriyanto
 */

class FF_View {
	
	public function page($name, $noinclude = false) {
		
		if($noinclude == true){
		
			require 'views/' . $name . '.php';
		
		}else{
		
			require 'views/freedom_header.php';
			require 'views/' . $name . '.php';
			require 'views/freedom_footer.php';

		}

	}
	
	public function msg($msg) {
		
		$this->message = $msg;
		require 'views/freedom_header.php';
		require 'views/freedom_message.php';
		require 'views/freedom_footer.php';
		
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