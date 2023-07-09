<?php

	$connection = mysqli_connect('localhost', 'root', '', 'tlotrt_counter');

	if (mysqli_connect_errno()) {
		die('Database connection failed' . mysqli_connect_errno());
	}

	$user_download_date = date("Y-m-d");
	$user_ip = $_SERVER['REMOTE_ADDR'];

	if (isset($_POST['download-butt-1'])) {
		header('Location: magnet:?xt=urn:btih:ec9788ffd79a321371f5f8a9a919ed0d5c654997&dn=Lord+of+the+Rings+Return+of+the+King+%282003%29+%5BExtended%5D+720p+YIFY&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969&tr=udp%3A%2F%2Fzer0day.ch%3A1337&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Fexodus.desync.com%3A6969');
		$select_query = "SELECT download_ip FROM download_3 WHERE download_ip = '{$user_ip}'";
		$result_set = mysqli_query($connection, $select_query);

		if ($result_set) {
			// query succesful

			if (mysqli_num_rows($result_set) == 0) {
				$insert_query = "INSERT INTO download_3 (download_date, download_ip) VALUES ('{$user_download_date}', '{$user_ip}')";
				mysqli_query($connection, $insert_query);
			}
		}
	}

	if (isset($_POST['download-butt-2'])) {
		header('Location: magnet:?xt=urn:btih:ad73d5576dc4ecfeea4353d4503f9b3f93dfa740&dn=The+Lord+of+the+Rings%3A+The+Return+of+the+King+EXTENDED+%282003%29+10&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969&tr=udp%3A%2F%2Fzer0day.ch%3A1337&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Fexodus.desync.com%3A6969');
		$select_query = "SELECT download_ip FROM download_3 WHERE download_ip = '{$user_ip}'";
		$result_set = mysqli_query($connection, $select_query);

		if ($result_set) {
			// query succesful

			if (mysqli_num_rows($result_set) == 0) {
				$insert_query = "INSERT INTO download_3 (download_date, download_ip) VALUES ('{$user_download_date}', '{$user_ip}')";
				mysqli_query($connection, $insert_query);
			}
		}
	}

	$get_id = "SELECT id FROM download_3";
	$download_count = mysqli_query($connection, $get_id);
	$record = mysqli_num_rows($download_count);

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<link rel="stylesheet" href="./styles/styles.css">
	<link rel="icon" href="./image/tlotr.png" type="image/png" sizes="16x16">
	<title>The Lord of the Rings: The Return of the King | Download</title>

</head>
<body>

	<div class="bg-poto">
		<img src="./image/bg_pic3.jpg" alt="lotr-3">
	</div><!-- .bg-poto -->
	
	<audio src="./audio/lotr-3.mp3" autoplay="true" loop="loop"></audio>

	<div class="lotr-d1 clearfix">
		<div class="image">
			<img src="./image/lotr-3.jpg" alt="The Lord of the Rings The Return of the King" title="The Lord of the Rings The Return of the King">
		</div><!-- .image -->

		<div class="detalis">
			<div class="name">
				<h3><span>The Lord of the Rings</span> <p>The Return of the King</p></h3>
			</div><!-- .name -->

			<div class="rating">
				<h4>IMDb Rating: 8.9/10</h4>
			</div><!-- .rating -->

			<div class="data">
				<h4>Release Date: 17/12/2003</h4>
				<h4>Duration: 04:23:09</h4>
				<h4>File Size: 1642MB</h4>
				<h4>Downloads: <?php echo $record; ?></h4>
			</div><!-- .data -->

			<div class="download-button">
				<form action="lotr3.php" method="post">
					<button type="submit" name="download-butt-1">720p</button>
					<button type="submit" name="download-butt-2" style="margin-left: 2%;">1080p</button>
				</form>
			</div><!-- .download-button -->

		</div><!-- .detalis -->

	</div><!-- .lotr-d1 -->

	<div class="text">
		<p>The final confrontation between the forces of good and evil fighting for control of the future of Middle-earth. Hobbits Frodo and Sam reach Mordor in their quest to destroy the "one ring", while Aragorn leads the forces of good against Sauron's evil army at the stone city of Minas Tirith.</p>
	</div><!-- .text -->

	<div class="foot">
		<p>© 2017 - <?php echo date('Y'); ?> LORDOFTHERINGSTRILOGY.COM: Created By Ushan Mithma Kumara<sup>™</sup></p>
	</div> <!-- .foot -->

</body>
</html>