<?php

	$connection = mysqli_connect('localhost', 'root', '', 'tlotrt_counter');

	if (mysqli_connect_errno()) {
		die('Database connection failed' . mysqli_connect_errno());
	}

	$user_view_date = date("Y-m-d");
	$user_ip = $_SERVER['REMOTE_ADDR'];

	$query = "SELECT view_ip FROM view_count WHERE view_ip = '{$user_ip}'";

	$result_set = mysqli_query($connection, $query);

	if ($result_set) {
		// Query succesful.
		if (mysqli_num_rows($result_set) == 0) {
			$insert_query = "INSERT INTO view_count (view_date, view_ip) VALUES ('{$user_view_date}', '{$user_ip}')";
			mysqli_query($connection, $insert_query);

		}
	}

	$get_id = "SELECT id FROM view_count";
	$view_count = mysqli_query($connection, $get_id);
	$record = mysqli_num_rows($view_count);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./styles/home.css">
	<link rel="icon" href="./image/tlotr.png" type="image/png" sizes="16x16">
	<title>The Lord of the Rings Trilogy</title>
	<meta name="discription" content="The Lord of the Rings Trilogy extended edition download a one site">
	<meta name="keywords" content="the lord of the rings the fellowship of the ring (2001), the lord of the rings the two towers (2002), the lord of the rings the return of the king (2003), extended edition, download, quality 720p & 1080p, torrent magnet link, the lord of the rings only, yify torrents">
	<meta name="author" content="Ushan Mithma Kumara">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div class="bg-img">
		<img src="./image/bg_img.jpg" alt="The Lord of the Rings Trilogy">
	</div> <!-- .bg-img -->
	
	<div class="main-head">
		<img src="./image/lotrt.png" alt="The Lord of the Rings">
	</div> <!-- .main-head -->

	<div class="main-section">
		<a href="lotr1.php"><img src="./image/lotr-1.jpg" alt="The Lord of the Rings: The Fellowship of the Ring" title="The Lord of the Rings: The Fellowship of the Ring"></a><a href="lotr2.php"><img src="./image/lotr-2.jpg" alt="The Lord of the Rings: The Two Towers" title="The Lord of the Rings: The Two Towers"></a><a href="lotr3.php"><img src="./image/lotr-3.jpg" alt="The Lord of the Rings: The Return of the King" title="The Lord of the Rings: The Return of the King"></a>
	</div> <!-- .main-section -->

	<div class="info">
		<p>The Lord of the Rings (also promoted as The Lord of the Rings: The Motion Picture Trilogy) is a film series consisting of three high fantasy adventure films directed by Peter Jackson. They are based on the novel The Lord of the Rings by J. R. R. Tolkien. The films are subtitled The Fellowship of the Ring (2001), The Two Towers (2002) and The Return of the King (2003). They were distributed by New Line Cinema.</p>
		<p>The Lord of the Rings Extended Edition is a version of Peter Jackson's Lord of the Rings film trilogy. These versions have new editing, additional special effects and music, and also more scenes and content than the theatrical versions. The Fellowship of the Ring contains 50 minutes of additional footage.</p>
	</div> <!-- .info -->

	<div class="foot">
		<p>© 2017 - <?php echo date('Y'); ?> LORDOFTHERINGSTRILOGY.COM: Created By Ushan Mithma Kumara<sup>™</sup></p>
	</div> <!-- .foot -->

</body>
</html>