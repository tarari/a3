<?php

	session_start();
	ini_set('display_errors',1);
	require  'config.php';
	require 'lib/connect.php';
	/*
	if(isset($_COOKIE['privacy'])){

	}
	else{
		setcookie('privacy','true');
	}
	*/
	$db=connectDB($dsn,$user,$pass);

	require('templates/index.tpl.php');


