<html>
	<head>
		<title>BJU Blog</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
		<script src="https://kit.fontawesome.com/d648ce330a.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<style>
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			body{
				width: 100%;
				height: 100vh;
			}

			nav{
				position: fixed;
				width: 100%;
				z-index: 1000;
				height: 70px;
				top: 0;
				right: 0;
				left: 0;
				background-color: #fff;
				display: flex;
				justify-content: space-between;
				align-items: center;
				border-bottom-left-radius: 10px;
				border-bottom-right-radius: 10px;
				margin-top: 5px;
				box-shadow: 0 19px 38px rgba(0,0,0,0.10);
			}

			.logo{
				font-family: 'Source Sans Pro', sans-serif;
				font-weight: bold;
				text-transform: uppercase;
				text-decoration: none;
				color: #2f8be0;
				font-size: 25px;
				margin-left: 20px;
			}

			nav ul{
				background-color: #fff;
			}

			nav ul li{
				font-family: 'Source Sans Pro', sans-serif;
				display: inline-block;
				padding: 20px;
				margin-top: 7px;
				font-weight: bolder;
				position: relative;
			}

			nav ul li a{
				text-decoration: none;
				color: #000;
				font-size: 15px;
				text-transform: uppercase;
				right: 7px;
				bottom: 10px;
			}

			nav ul li ul{
				position: absolute;
				visibility: hidden;
				opacity: 0;
				text-align: center;
				width: 100%;
				transition: 0.4s linear;
				font-size: 2px;
			}

			nav ul li ul a{
				position: relative;
				font-size: 15px;
				font-weight: bold;
				right: 8px;
			}

			nav > ul > li > ul {
				top: 90%;
				left: 0;
			}

			nav ul li:hover > ul{
				visibility: visible;
				opacity: 1;
			}

			.icon-burger{
				width: 100px;
				height: 45px;
				display: flex;
				justify-content: center;
				align-items: center;
				border: 1px solid #2f8be0;
				font-weight: bolder;
				font-size: 15px;
				color: #2f8be0;
				display: none;
			}

			.icon-burger span{
				font-family: 'Source Sans Pro', sans-serif;
			}

			nav input{
				display: none;
			}

			.mainlink{
				color: #0099ff;
			}

			@media (max-width: 768px) {
				#menu{
					position: absolute;
					top: 70px;
					left: -100%;
					transition: 0.4s linear;
					width: 100%;
				}

				nav ul li{
					display: block;
				}

				nav ul li ul {
					width: max-content;
					z-index: 1;
				}

				.icon-burger{
					display: flex;
				}

				input:checked ~ #menu{
					left: 0;
				}
			}
		</style>
	</head>
	<body>
	<div class="container">
		<nav>
			<a href="index" class="logo">PT BANDA JAYA UTAMA</a>
			<input type="checkbox" id="box">
			<label for="box" class="icon-burger">
				<span><i class="fas fa-bars"></i></span>
			</label>

			<ul id="menu">
				<?php if ($this->session->userdata('logged_in')) : ?>
				<li><a href="/scaff/index.php"class="mainlink">Home</a></li>
				<li>
					<a href="<?php echo base_url(); ?>penyewaan">Data &nbsp;&nbsp;<span><i class="fas fa-angle-down"></i></span></a>
					<ul>
						<li><a href="<?php echo base_url(); ?>penyewaan">Rental Data</a></li>
						<li><a href="<?php echo base_url(); ?>contactus">Contact Data</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url(); ?>posts">Article</a></li>
				<li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
				<li>
					<a href="<?php echo base_url(); ?>posts/create">Create &nbsp;&nbsp;<span><i class="fas fa-angle-down"></i></span></a>
					<ul>
						<li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
						<li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>users/logout">Account &nbsp;&nbsp;<span><i class="fas fa-angle-down"></i></span></a>
					<ul>
						<li><a href="<?php echo base_url(); ?>users/changepassword">Update Password</a></li>
						<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
						<li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
					</ul>
				</li>
				<?php endif; ?>
				<?php if (!$this->session->userdata('logged_in')) : ?>
					<li><a href="/scaff/index.php"class="mainlink">Home</a></li>
					<li><a href="<?php echo base_url(); ?>posts">Article</a></li>
					<li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
					<li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
				<?php endif; ?>
			</ul>
		</nav>
		<br>
		<br>
		<br>
		<br>

	<div class="container">

		<!-- Flash Message -->
		<?php if ($this->session->flashdata('user_registered')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('current_password_error')): ?>
			<?php echo '<p class="alert alert-danger">' .$this->session->
				flashdata('current_password_error').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('new_password_error')): ?>
			<?php echo '<p class="alert alert-danger">' .$this->session->
				flashdata('new_password_error').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('update_password')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('update_password').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('post_created')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('post_created').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('post_updated')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('post_updated').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('category_created')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('category_created').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('post_deleted')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('post_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('login_failed')): ?>
			<?php echo '<p class="alert alert-danger">' .$this->session->
				flashdata('login_failed').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('user_loggedin')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('user_loggedin').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('category_deleted')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('category_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('user_loggedout')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('user_loggedout').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('data_created')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('data_created').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('data_updated')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('data_updated').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('data_deleted')): ?>
			<?php echo '<p class="alert alert-success">' .$this->session->
				flashdata('data_deleted').'</p>'; ?>
		<?php endif; ?>
