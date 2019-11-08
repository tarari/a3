<?php

	session_start();
	ini_set('display_errors',1);
	
	$_SESSION['errors']=null;
	

	require('templates/index.tpl.php');


