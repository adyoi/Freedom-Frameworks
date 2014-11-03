<div class="content">

	<?php if(FF_Session::get('errorLogin') == true): ?>
		<div class="alert alert-danger" role="alert">Invalid Username or Password</div>
	<?php endif; ?>

	<h1>Login Demo</h1>
	<p>Username : demo | Password : demo</p>
	<form class="form-horizontal" role="form" action="<?php echo url; ?>/login/login/loginin" method="post">
	  <div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
		<div class="input-group col-sm-10">
		  <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="login">
		  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		<div class="input-group col-sm-10">
		  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
		  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Sign in</button>
		</div>
	  </div>
	</form>

</div>