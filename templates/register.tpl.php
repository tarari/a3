<?php

	include 'header.tpl.php';

	
	$db=connectDB($dsn,$user,$pass);

	if (isset($_POST['submit'])){
		if (!empty($_POST['email'])&& 
			!empty($_POST['passw1']) && 
			!empty($_POST['passw2']))
		{
			$email=$_POST['email'];
			$passw1=$_POST['passw1'];
			$passw2=$_POST['passw2'];
			if($passw1==$passw2){
				$pass=password_hash($passw1, PASSWORD_BCRYPT,['cost'=>4]);
				$params=[$email,$pass];
				try{
					query($db,'INSERT  INTO user(email,passwd) VALUES(?,?)',$params);
				}catch(Exception $e){
					$_SESSION['errors'][]=$e->getMessage();
				}
				header('Location:/');
			}
			
		}

	}
	?>
	<div class="container-form">
		<h3 class="align-items-center">Sign up</h3>
	<form id="form-reg" class="form" method="post" action="<?= htmlentities($_SERVER['PHP_SELF']); ?>">
		<div class="form-group  align-items-center">
			<div class="col-auto">
			<label class="col-form-label col-sm-2">Email</label><input class="form-input" type="email" name="email">
			</div>
			<div class="col-auto">
			<label class="col-form-label col-sm-2">Password</label><input class="form-input" type="password" name="passw1"></div>
			<div class="col-auto">
			<label class="col-form-label col-sm-2">Password again</label><input class="form-input" type="password" name="passw2"></div>
			<div class="col-auto">
			<p><input class="btn btn-primary" type="submit" name="submit" value="Register"></p>
			</div>
		</div>
	</form>
	</div>
</body>
</html>