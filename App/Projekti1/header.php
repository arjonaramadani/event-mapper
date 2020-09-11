<html>
<body>
      <header id="header"> 
				<div class="inner">
					<?php if($_SERVER['PHP_SELF'] == '/index.php' )
					{

					?>
					<a href="index.php" class="logo"><strong>Event Mapper</strong></a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="App/Projekti1/about-us.php">About Us</a>
						<a href="index.php#footer">Contact Us</a>
						<a href="App/Projekti1/register.php">Register</a>
						<a href="App/Projekti1/login.php">Login</a>
					</nav>
					<?php } else 
					{ 
						?>
						<a href="/../../index.php" class="logo"><strong>Event Mapper</strong></a>
						<nav id="nav">
							<a href="/../../index.php">Home</a>
							<a href="/about-us.php">About Us</a>
							<a href="/../../index.php#footer">Contact Us</a>
							<a href="/register.php">Register</a>
							<a href="/login.php">Login</a>
						</nav>
						<?php } ?>

					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
</body>


</html>