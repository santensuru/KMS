<!DOCTYPE HTML>
<html>
	<head>
		<title><?=$title?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css" type="text/css" />
		<script src="<?php echo base_url(); ?>js/jquery.easy-confirm-dialog.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".confirm").easyconfirm({locale: { title: 'Simpan', button: ['Tidak','Ya']}});
			});
		</script>
		<style type="text/css">
			h1 {
				margin-top: 2px;
				margin-bottom: 2px;
			}
			#my-header {
				height:65px;
			}
			#user {
				margin-top: 20px;
			}
			/*#user a {
				color: blue;
			}
			#user a:hover {
				color: red;
			}*/
			#content {
				margin-top: 70px;
				margin-left: 20px;
				margin-right: 20px;
				margin-bottom: 20px;
				height: auto;
			}
			#position-bar {
				margin-top: 10px;
				margin-bottom: 10px;
			}
			#navbar {
				border-style: solid;
				border-width: 2px;
				margin-left: 20px;
				height: 530px;
			}
		</style>
	</head>
	<body>
		<!-- header -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="my-header">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><h1>Kartu Menuju Sehat</h1></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li id="user"><a href="#">petugas posyandu</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div id="content">
			<!-- position bar -->
			<div id="position-bar">
				<a href="<?php echo base_url(); ?>">Beranda</a> > <?=$title?>
			</div>
			<!-- content -->
			<div class="row">
