<?php

define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','freedom');
define('DB_USER','root');
define('DB_PASS','');

foreach (PDO::getAvailableDrivers() as $driver) {
	if ($driver == NULL) {
		//echo "No PDO drivers were found!";
	} else {
		//echo $driver."<br />";
	}
}

/* File_name : ./config/database.php */
/* Freedom Frameworks Database_Config */