<!DOCTYPE HTML>
<html>
	<head>
		<title>Register - Event Mapper</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/main.css" />
	</head>
	<body class="subpage">

         <header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><strong>Event Mapper</strong></a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="generic.html">About Us</a>
						<a href="index.php#footer">Contact Us</a>
						<a href="elements.html">Register</a>
						<a href="elements.html">Login</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
         </header>

         <br><br>

         <section id="three" class="container">
         <header class="align-center">
						<h2>Register account</h2>
					</header>
                           <form method="post" action="#">
                              
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="name" id="name" value="" placeholder="Name" />
                                 </div>
                                 <div class="6u 12u$(xsmall)">
								 <input type="text" name="username" id="username" value="" placeholder="Username" />
                                 </div>
                                 <div class="6u 12u$(xsmall)">
												<input type="password" name="password" id="password" value="" placeholder="Password" />
											</div>

											<div class="6u 12u$(xsmall)">
											<input type="password" name="confirm-password" id="confirm-password" value="" placeholder="Confirm Password" />
											</div>

											<div class="4u 12u$(small)">
												<input type="radio" id="user" name="type" checked>
												<label for="user">User</label>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="admin" name="type">
												<label for="admin">Admin</label>
											</div>
											
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Register" /></li>
												</ul>
											</div>
										</div>
									</form>
         </section>

		

		<!-- Scripts -->
			<script src="../js/jquery.min.js"></script>
			<script src="../js/skel.min.js"></script>
			<script src="../js/util.js"></script>
			<script src="../js/main.js"></script>

	</body>
</html>