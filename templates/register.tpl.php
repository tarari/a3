<?php

	include 'header.tpl.php';
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