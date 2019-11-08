<?php
	include 'header.tpl.php';
	$db=connectDB($dsn,$user,$pass);

	if (isset($_POST['submit'])){
		if(!empty($_POST['email']) && !empty($_POST['passw'])){
			$email=$_POST['email'];
			$passw=$_POST['passw'];
			$sql="SELECT * FROM user WHERE email=?";
			$stmt=$db->prepare($sql);
			$user=$stmt->fetch();
			// si coincide password
			if($user && password_verify($passw,$user['passwd'])){
				$_SESSION['logged']=true;
				$_SESSION['email']=$email;
				header('Location:dashboard.php');
			}
		}
	}
?>
	<div class="container-form">
		<h3 class="align-items-center">Sign in</h3>
	<form class="form" method="post" action="<?= htmlentities($_SERVER['PHP_SELF']); ?>">
		<div class="form-group  align-items-center">
			<div class="col-auto ">
			<label class="col-form-label col-sm-2">Email</label><input class="form-input" type="email" name="email">
			</div>
			<div class="col-auto">
			<label class="col-form-label col-sm-2">Password</label><input class="form-input" type="password" name="passw"></div>
			<div class="col-auto">
			<p><input class="btn btn-primary" type="submit" name="submit" value="Login"></p>
			</div>
		</div>
	</form>
	</div>
</body>
</html>