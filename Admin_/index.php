<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library Management System
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 15px;
	}

	body {
		width: 100%;
	}

	wrapper {
		width: 100%;
		height: 50px;
	}

	header {
		width: 1500px;
		height: 50px;
		background-color: white;
		border-bottom: 1px solid grey;
	}

	li a {
		color: black;
		font-family: Lato;
	}

	li a:hover {
		color: blue;
	}

	.logo img {
		padding-left: 10px;
		max-width: 10%;
		height: auto;
	}

	section {
		width: 1500px;
	}

	section .sec_img {
		background-image: url("images/homebg.png");
		height: 600px;
	}

	.box {
		margin-top: 400px;
		margin-left: 470x;
		height: 70px;
		width: 500px;
		background-color: transparent;
		opacity: 1;
	}

	.box button {
		height: 70px;
		width: 225px;
		font-family: Lato;
		font-size: 14pt;
		border-radius: 50px;
	}

	.box button:hover {
		cursor: pointer;
	}

	.book_btn {
		background-color: #5173B9;
		color: white;
		border-style: none;
	}

	.fb_btn {
		background-color: white;
		border-style: groove;
		border-color: #5173B9;
		margin-left: 20px;
		color: #5173B9
	}

	.book_btn:hover {
		background-color: white;
		border-style: groove;
		border-color: #5173B9;
		color: #5173B9
	}

	.fb_btn:hover {
		background-color: #5173B9;
		color: white;
		border-style: none;
	}


</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/house.png">
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
								<li><a href="index.php">HOME</a></li>
								<li><a href="books.php">BOOKS</a></li>
								<li><a href="admin_login.php">LOGIN</a></li>
								<li><a href="registration.php">SIGN-UP</a></li>
								<li><a href="feedback.php">FEEDBACK</a></li>
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<button type="button" class="book_btn" onClick="location.href='books.php'">Explore Books</button>
				<button type="button" class="fb_btn" onClick="location.href='feedback.php'">Feedback</button>
			</div>
		</div>
		</section>
		

	</div>
</body>
</html>