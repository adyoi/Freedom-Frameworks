<?php

class FF_Database extends PDO {

	function __construct(){
		
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME , DB_USER , DB_PASS);
		
	}

}

/* File_name : ./libs/Database.php */
/* Freedom Frameworks Database_Library */