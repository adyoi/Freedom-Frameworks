FreedomFrameworks | http://adyoi.com/freedom
============================================

Freedom Frameworks Featuring Amazing Bootstrap is Simply and Powerful This Frameworks built in Native PHP

Controller Installation :
=========================
<?php if(empty($_SERVER['HTTP_REFERER'])) return 0;

class Index extends FF_Controller {
 
 function __construct () {
 
  parent::__construct();

 }
 
 public function index () {
  
  $this->view->page('index/index', 0);

 }
 
 public function param($arg) {
  
  $this->view->msg($arg[0] . ' , ' . $arg[1]. ' , ' . $arg[2]. ' , ' . $arg[3]. ' , ' . $arg[4]);

 }

}

/* File_name : ./controllers/index.php */

/* Freedom Frameworks Index_Controller */

Controller Usage :
==================
Example 1 : http://adyoi.com/freedom/index/param/1/2/3/4/5

Example 2 : http://adyoi.com/freedom/index.php/param/1/2/3/4/5

Download :
==========
https://github.com/adyoi/FreedomFrameworks/releases/
