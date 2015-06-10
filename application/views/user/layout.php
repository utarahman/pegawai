<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">

<title>Data Pegawai</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url('media/css/bootstrap.min.css')?>"
	rel="stylesheet">
<link href="<?php echo base_url('media/css/styles.css')?>"
	rel="stylesheet">

<!-- java script -->
<script src="<?php echo base_url('media/js/jquery-1.11.3.min.js')?>"></script>
<script src="<?php echo base_url('media/js/bootstrap.min.js')?>"></script>

<!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">
</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">User</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Settings</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Help</a></li>
				</ul>
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Search...">
				</form>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li class="active"><a href="<?php echo site_url('user')?>">Overview <span class="sr-only">(current)</span></a></li>
					<li><a href="<?php echo site_url('user/user_list')?>">List Pengguna</a></li>
					<li><a href="<?php echo site_url('user/user_add')?>">Tambah Pengguna</a></li>
					<li><a href="<?php echo site_url('user/list_category')?>">List Kategori</a></li>
					<li><a href="<?php echo site_url('user/category_add')?>">Tambah Kategori</a></li>
				</ul>
			</div>
			<?php isset($main) ? $this->load->view($main) : null; ?>
		</div>
	</div>
</body>
</html>
