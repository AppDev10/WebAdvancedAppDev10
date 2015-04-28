<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<html>
<head>
	<title></title>

	<link rel="stylesheet" href="<?=base_url(array("assets","bootstrap","bootstrap.css"))?>">
	<link rel="stylesheet" href="<?=base_url(array("assets","css","styles.css"))?>">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<img src="">
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
							<li class="active"><a href="#">HOME</span></a></li>
							<li><a href="#">OVER TED</a></li>
							<li><a href="#">KALENDER</a></li>
							<li><a href="#">FORUM</a></li>
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
