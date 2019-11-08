<?php

	session_start();
	ini_set('display_errors',1);
	define('ROOT',explode('/',$_SERVER['REQUEST_URI']));
	print_r(ROOT);
	die;
	
	$_SESSION['errors']=null;
	

	require('templates/index.tpl.php');


