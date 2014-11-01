<?php

/* 
 *	Freedom Frameworks Version 1.0 Beta
 *	This Frameworks built in Native PHP 5.5.15
 *	------------------------------------------
 *	Started_On : 11 Oct 2014 19:14
 *	File_name  : ./engine/Freedom_Model.php
 *	--------------------------------------------
 *	Adi Apriyanto
 */

class FF_Model{

	function __construct() {

		// Config
		require 'config/database.php';

		// Library
		require 'libs/Database.php';

		$this->db = new FF_Database();
		
		$this->view = new FF_View();

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
