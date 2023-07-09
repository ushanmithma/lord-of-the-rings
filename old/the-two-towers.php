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
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
	<link rel="stylesheet" type="text/css" href="./css/two-towers.css">
	<link rel="icon" href="./img/tlotr.png" type="image/png" sizes="16x16">
	<title>The Two Towers - LORD OF THE RINGS TRILOGY</title>
</head>
<body>
	<div class="tlotr-wrapper-left">
		<p>Powered By 000webhost.com</p>
	</div>
	<div class="tlotr-wrapper-right">
		<p>© | <a href="http://www.lordoftherings.net/">LORDOFTHERINGS.net</a></p>
	</div>
	<div class="amet clearfix">
		<div class="main clearfix">
			<img src="./img/logo.jpg" alt="The Lord of the Rings Logo">
		</div>
		<div class="main-image">
			<img src="./img/tlotr.png" alt="The-Lord-of-the-Rings-Trilogy">
		</div>
		<div class="nav-bar clearfix">
			<ul>
				<a class="nav-bar-link-left" href="index.php"><li>The Lord of the Rings</li></a><a href="the-fellowship-of-the-ring.php"><li>The Fellowship of the Ring</li></a><a href="the-two-towers.php" style="background: #000000;"><li>The Two Towers</li></a><a class="nav-bar-link-right" href="the-return-of-the-king.php"><li>The Return of the King</li></a>
			</ul>
		</div>
	</div>
	<div class="towers-task clearfix">
		<h2>The Lord of the Rings The Two Towers</h2>
		<img src="./img/the-two-towers.jpg" alt="the-two-towers">
		<p>While Frodo and Sam, now accompanied by a new guide, continue their hopeless journey towards the land of shadow to destroy the One Ring, each member of the broken fellowship plays their part in the battle against the evil wizard Saruman and his armies of Isengard.</p>
		<p>Orcs sent by Saruman and Sauron kill Boromir and take Merry and Pippin. Aragorn, Gimli and Legolas debate amongst themselves which pair of hobbits to follow. They decide to follow the Orcs bearing Merry and Pippin to Saruman. In the kingdom of Rohan, the Orcs are slain by a company of the Rohirrim. Merry and Pippin escape into Fangorn Forest, where they are befriended by Treebeard, the oldest of the tree-like Ents. Aragorn, Gimli and Legolas track the hobbits to Fangorn. There they unexpectedly meet Gandalf. Gandalf explains that he slew the Balrog; darkness took him, but he was sent back (to Middle-earth). He is clothed in white and is now "Gandalf the White", for he has taken Saruman's place as the chief of the wizards. Gandalf assures his friends that Merry and Pippin are safe. Together they ride to Edoras, capital of Rohan. Gandalf frees Théoden, King of Rohan, from the influence of Saruman's spy Gríma Wormtongue. Théoden musters his fighting strength and rides with his men to the ancient fortress of Helm's Deep, while Gandalf departs to seek help from Treebeard.</p>
		<p>Meanwhile, the Ents, roused by Merry and Pippin from their peaceful ways, attack Isengard, Saruman's stronghold, and trap the wizard in the tower of Orthanc. Gandalf convinces Treebeard to send an army of Huorns to Théoden's aid. Gandalf brings an army of Rohirrim to Helm's Deep, and they defeat the Orcs, who flee into the waiting shadow of the trees. Gandalf visits Saruman, offering him a chance to turn away from evil. When Saruman refuses to listen, Gandalf strips him of his rank and most of his powers. Pippin picks up a palantír, a seeing-stone that Saruman used to speak with Sauron and through which Saruman was ensnared, and is seen by Sauron. Gandalf rides for Minas Tirith, chief city of Gondor, taking Pippin with him.</p>
		<iframe class="ttrailer" src="https://youtube.com/embed/cvCktPUwkW0" frameborder="0"></iframe>
		<p>Frodo and Sam capture Gollum, who had been following them from Moria. They force him to guide them to Mordor. They find that the Black Gate of Mordor is too well guarded, so instead they travel to a secret way Gollum knows. On the way, they encounter Faramir, who, unlike his brother Boromir, resists the temptation to seize the Ring. He provides Frodo and Sam with food. Gollum — who is torn between his loyalty to Frodo and his desire for the Ring — betrays Frodo by leading him to the great spider Shelob in the tunnels of Cirith Ungol. Frodo falls when pierced by Shelob's sting. But with the help of Galadriel's gifts, Sam fights off the spider. Believing Frodo to be dead, Sam takes the Ring in the hope of finishing the quest alone. Orcs find Frodo, and from their words Sam becomes aware that Frodo is yet alive. The Orcs take Frodo's body, and Sam chases after them, entering Mordor alone.</p>
	</div>
	<div class="towers-download clearfix">
		<div class="download-task-2">
			<h3>The Lord of the Rings The Two Towers<br> Extended Edition</h3>
			<ul>
				<li>Part: 2</li>
				<li>IMDb Rating: 8.7/<sub>10</sub></li>
				<li>Release Date: 18/12/2002</li>
				<li>Duration: 03:55:24</li>
				<li>Downloads: <?php echo $record; ?></li>
			</ul>
			<form action="the-two-towers.php" method="post">
				<button type="submit" name="download-butt-1">Download 720p</button><button type="submit" name="download-butt-2">Download 1080p</button>
			</form>
		</div>
		<div class="torrent-from">
			<img src="./img/yify-torrents-logo.png" alt="YIFY Torrents Logo">
		</div>
	</div>
	<div class="foot">
		<h4>© <?php echo date('Y'); ?> LORDOFTHERINGSTRILOGY.COM: Created By Ushan Mithma Kumara<sup>®</sup></h4>
	</div>
</body>
</html>