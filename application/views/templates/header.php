<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="<?=base_url(array("assets","bootstrap","bootstrap.css"))?>">

	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="<?=base_url(array("assets","css","styles.css"))?>">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<img id="header-image" src="<?=base_url(array("assets","images","TEDX.jpg"))?>">
					</div>
					<div class="col-md-4" id="test">
						<div class="btn-group-vertical" role="group" aria-label="...">
							<button type="button" class="btn btn-default loginButton">Inloggen</button>
							<button type="button" class="btn btn-default loginButton">Registreer</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav nav-left">
							<li><a href='<?php echo base_url(array("home"))?>'>HOME</span></a></li>
							<li><a href='<?php echo base_url(array("about"))?>'>OVER TED</a></li>
							<li><a href='<?php echo base_url(array("event"))?>'>KALENDER</a></li>
							<li><a href='<?php echo base_url(array("forum"))?>'>FORUM</a></li>
						</ul>
						<form class="navbar-form navbar-right" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Zoek</button>
						</form>
					</div>
				</div>
			</div>
		</nav>
