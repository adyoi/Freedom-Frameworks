<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo url; ?>/private/favicon.ico">
    <title>Freedom Frameworks</title>
    <link href="<?php echo url; ?>/private/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo url; ?>/private/css/starter-template.css" rel="stylesheet">
    <!--[if lt IE 9]>
		<script src="<?php echo url; ?>/private/js/ie8-responsive-file-warning.js"></script>
	<![endif]-->
    <script src="<?php echo url; ?>/private/js/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
      <script src="<?php echo url; ?>/private/js/html5shiv.min.js"></script>
      <script src="<?php echo url; ?>/private/js/respond.min.js"></script>
    <![endif]-->
</head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo url; ?>">Freedom Frameworks</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo url; ?>">Home</a></li>
            <li><a href="<?php echo url; ?>/about">About</a></li>
            <li>
				<?php if(FF_Session::get('loggedIn') == true): ?>
				<a href="<?php echo url; ?>/login/logout">Model ex. Logout</a>
				<?php else: ?>
				<a href="<?php echo url; ?>/login">Model ex. Login</a>
				<?php endif; ?>
			</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="starter-template">