<?php

	$connection = mysqli_connect('localhost', 'root', '', 'tlotrt_counter');

	if (mysqli_connect_errno()) {
		die('Database connection failed' . mysqli_connect_errno());
	}

	$user_download_date = date("Y-m-d");
	$user_ip = $_SERVER['REMOTE_ADDR'];

	if (isset($_POST['download-butt-1'])) {
		header('Location: magnet:?xt=urn:btih:8e5544c39ab5e3e0e2bb8a7c3c21c0ebfbf37467&dn=Lord+of+the+Rings+Fellowship+of+the+Ring+%5BEXTENDED+%5D720p+-+YIFY&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969&tr=udp%3A%2F%2Fzer0day.ch%3A1337&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Fexodus.desync.com%3A6969');
		$select_query = "SELECT download_ip FROM download_1 WHERE download_ip = '{$user_ip}'";
		$result_set = mysqli_query($connection, $select_query);

		if ($result_set) {
			// query succesful

			if (mysqli_num_rows($result_set) == 0) {
				$insert_query = "INSERT INTO download_1 (download_date, download_ip) VALUES ('{$user_download_date}', '{$user_ip}')";
				mysqli_query($connection, $insert_query);
			}
		}
	}

	$get_id = "SELECT id FROM download_1";
	$download_count = mysqli_query($connection, $get_id);
	$record = mysqli_num_rows($download_count);

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<link rel="stylesheet" href="./styles/styles.css">
	<link rel="icon" href="./image/tlotr.png" type="image/png" sizes="16x16">
	<title>The Lord of the Rings: The Fellowship of the Ring | Download</title>

</head>
<body>

	<div class="bg-poto">
		<img src="./image/bg_pic1.jpg" alt="lotr-1">
	</div><!-- .bg-poto -->
	
	<audio src="./audio/lotr-1.mp3" autoplay="true" loop="loop"></audio>

	<div class="lotr-d1 clearfix">
		<div class="image">
			<img src="./image/lotr-1.jpg" alt="The Lord of the Rings The Fellowship of the Ring" title="The Lord of the Rings The Fellowship of the Ring">
		</div><!-- .image -->

		<div class="detalis">
			<div class="name">
				<h3><span>The Lord of the Rings</span> <p>The Fellowship of the Ring</p></h3>
			</div><!-- .name -->

			<div class="rating">
				<h4>IMDb Rating: 8.8/10</h4>
			</div><!-- .rating -->

			<div class="data">
				<h4>Release Date: 19/12/2001</h4>
				<h4>Duration: 03:48:17</h4>
				<h4>File Size: 1539MB</h4>
				<h4>Downloads: <?php echo $record; ?></h4>
			</div><!-- .data -->

			<div class="download-button">
				<form action="lotr1.php" method="post">
					<button type="submit" name="download-butt-1">720p</button>
				</form>
			</div><!-- .download-button -->

		</div><!-- .detalis -->

	</div><!-- .lotr-d1 -->

	<div class="text">
		<p>An ancient Ring thought lost for centuries has been found, and through a strange twist in fate has been given to a small Hobbit named Frodo. When Gandalf discovers the Ring is in fact the One Ring of the Dark Lord Sauron, Frodo must make an epic quest to the Cracks of Doom in order to destroy it! However he does not go alone. He is joined by Gandalf, Legolas the elf, Gimli the Dwarf, Aragorn, Boromir and his three Hobbit friends Merry, Pippin and Samwise. Through mountains, snow, darkness, forests, rivers and plains, facing evil and danger at every corner the Fellowship of the Ring must go. Their quest to destroy the One Ring is the only hope for the end of the Dark Lords reign!</p>
	</div><!-- .text -->

	<div class="foot">
		<p>© 2017 - <?php echo date('Y'); ?> LORDOFTHERINGSTRILOGY.COM: Created By Ushan Mithma Kumara<sup>™</sup></p>
	</div> <!-- .foot -->

</body>
</html>
