<?php

	session_start();
	require 'lib/connect.php';
	
	if(isset($_COOKIE['privacy'])){

	}
	else{
		setcookie('privacy','true');
	}

