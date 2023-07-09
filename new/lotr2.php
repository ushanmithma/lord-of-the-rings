<?php

	$connection = mysqli_connect('localhost', 'root', '', 'tlotrt_counter');

	if (mysqli_connect_errno()) {
		die('Database connection failed' . mysqli_connect_errno());
	}

	$user_download_date = date("Y-m-d");
	$user_ip = $_SERVER['REMOTE_ADDR'];

	if (isset($_POST['download-butt-1'])) {
		header('Location: magnet:?xt=urn:btih:bd91f2d8861a2a4579029f68e24d2c65b28eb2cd&dn=Lord+of+the+Rings+Two+Towers+%282002%29+%5BEXTENDED+%5D720p+-+YIFY&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969&tr=udp%3A%2F%2Fzer0day.ch%3A1337&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Fexodus.desync.com%3A6969');
		$select_query = "SELECT download_ip FROM download_2 WHERE download_ip = '{$user_ip}'";
		$result_set = mysqli_query($connection, $select_query);

		if ($result_set) {
			// query succesful

			if (mysqli_num_rows($result_set) == 0) {
				$insert_query = "INSERT INTO download_2 (download_date, download_ip) VALUES ('{$user_download_date}', '{$user_ip}')";
				mysqli_query($connection, $insert_query);
			}
		}
	}

	if (isset($_POST['download-butt-2'])) {
		header('Location: magnet:?xt=urn:btih:ebda5b39978f58b50b2666a808a11c971a9cf080&dn=The+Lord+of+the+Rings%3A+The+Two+Towers+%7BExtended%7D+%282002%29+1080p+Br&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969&tr=udp%3A%2F%2Fzer0day.ch%3A1337&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Fexodus.desync.com%3A6969');
		$select_query = "SELECT download_ip FROM download_2 WHERE download_ip = '{$user_ip}'";
		$result_set = mysqli_query($connection, $select_query);

		if ($result_set) {
			// query succesful

			if (mysqli_num_rows($result_set) == 0) {
				$insert_query = "INSERT INTO download_2 (download_date, download_ip) VALUES ('{$user_download_date}', '{$user_ip}')";
				mysqli_query($connection, $insert_query);
			}
		}
	}

	$get_id = "SELECT id FROM download_2";
	$download_count = mysqli_query($connection, $get_id);
	$record = mysqli_num_rows($download_count);

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<link rel="stylesheet" href="./styles/styles.css">
	<link rel="icon" href="./image/tlotr.png" type="image/png" sizes="16x16">
	<title>The Lord of the Rings: The Two Towers | Download</title>

</head>
<body>

	<div class="bg-poto">
		<img src="./image/bg_pic2.jpg" alt="lotr-2">
	</div><!-- .bg-poto -->
	
	<audio src="./audio/lotr-2.mp3" autoplay="true" loop="loop"></audio>

	<div class="lotr-d1 clearfix">
		<div class="image">
			<img src="./image/lotr-2.jpg" alt="The Lord of the Rings The Two Towers" title="The Lord of the Rings The Two Towers">
		</div><!-- .image -->

		<div class="detalis">
			<div class="name">
				<h3><span>The Lord of the Rings</span> <p>The Two Towers</p></h3>
			</div><!-- .name -->

			<div class="rating">
				<h4>IMDb Rating: 8.7/10</h4>
			</div><!-- .rating -->

			<div class="data">
				<h4>Release Date: 18/12/2002</h4>
				<h4>Duration: 03:55:24</h4>
				<h4>File Size: 1383MB</h4>
				<h4>Downloads: <?php echo $record; ?></h4>
			</div><!-- .data -->

			<div class="download-button">
				<form action="lotr2.php" method="post">
					<button type="submit" name="download-butt-1">720p</button>
					<button type="submit" name="download-butt-2" style="margin-left: 2%;">1080p</button>
				</form>
			</div><!-- .download-button -->

		</div><!-- .detalis -->

	</div><!-- .lotr-d1 -->

	<div class="text">
		<p>While Frodo and Sam, now accompanied by a new guide, continue their hopeless journey towards the land of shadow to destroy the One Ring, each member of the broken fellowship plays their part in the battle against the evil wizard Saruman and his armies of Isengard.</p>
	</div><!-- .text -->

	<div class="foot">
		<p>© 2017 - <?php echo date('Y'); ?> LORDOFTHERINGSTRILOGY.COM: Created By Ushan Mithma Kumara<sup>™</sup></p>
	</div> <!-- .foot -->

</body>
</html>