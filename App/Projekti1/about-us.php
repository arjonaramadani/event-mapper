<!DOCTYPE HTML>
<html>
<?php 
	$content = "Empty";
	include(dirname(__FILE__)."\Controllers\Connection.php");
	$query = "SELECT content FROM pages WHERE page_name = 'about_us'";
	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			$content = $row['content'];
		//   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		}
	} else {
		echo "0 results";
	}
?>
	<head>
		<title>About Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="../css/main.css" />
   	</head>
	<body class="subpage">

	<?php include('header.php') ?>

			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>About us</h2>
					</header>
					<p>
					<?php echo $content ?>
					</p>
				</div>
			</section>

		<!-- Scripts -->
		<script src="../js/jquery.min.js"></script>
			<script src="../js/skel.min.js"></script>
			<script src="../js/util.js"></script>
			<script src="../js/main.js"></script>

	</body>
</html>