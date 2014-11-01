<?php

/* 
 *	Freedom Frameworks Version 1.0 Beta
 *	This Frameworks built in Native PHP 5.5.15
 *	On 11 Oct 2014 19:14
 *	Adi Apriyanto
 */

require 'config/config.php';

function __autoload($o_o) {
	include eng.cls.ext;
}

$freedom = new Freedom();
