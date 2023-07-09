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
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
	<link rel="stylesheet" type="text/css" href="./css/return-of-the-king.css">
	<link rel="icon" href="./img/tlotr.png" type="image/png" sizes="16x16">
	<title>The Return of the King - LORD OF THE RINGS TRILOGY</title>
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
				<a class="nav-bar-link-left" href="index.php"><li>The Lord of the Rings</li></a><a href="the-fellowship-of-the-ring.php"><li>The Fellowship of the Ring</li></a><a href="the-two-towers.php"><li>The Two Towers</li></a><a class="nav-bar-link-right" href="the-return-of-the-king.php" style="background: #000000;"><li>The Return of the King</li></a>
			</ul>
		</div>
	</div>
	<div class="return-task clearfix">
		<h2>The Lord of the Rings The Return of the King</h2>
		<img src="./img/the-return-of-the-king.jpg" alt="the-return-of-the-king">
		<p>The final confrontation between the forces of good and evil fighting for control of the future of Middle-earth. Hobbits Frodo and Sam reach Mordor in their quest to destroy the "one ring", while Aragorn leads the forces of good against Sauron's evil army at the stone city of Minas Tirith.</p>
		<p>Sauron sends a great army against Gondor. Gandalf arrives at Minas Tirith to warn Denethor of the attack, while Théoden leads the Rohirrim to the aid of Gondor. Minas Tirith is besieged. Denethor is deceived by Sauron and falls into despair. He burns himself alive on a pyre, nearly taking his son Faramir with him. Aragorn, accompanied by Legolas, Gimli and the Rangers of the North, takes the Paths of the Dead in the hopes of bringing the Dead to his aid, for the Dead Men of Dunharrow are bound by a curse by which they are given no rest until they fulfil their oath to fight for the King of Gondor. With the coming of Aragorn, the Army of the Dead fulfil their oath and strike terror into the Corsairs of Umbar invading southern Gondor. Aragorn defeats the Corsairs and takes their ships, which he uses to bring the men of southern Gondor up the Anduin, coming just in time to the aid of Minas Tirith. Éowyn, Théoden's niece whom he loves as a daughter, slays the Lord of the Nazgûl with help from Merry. Théoden is slain and Éowyn and Merry are injured. Together Gondor and Rohan defeat Sauron's army in the Battle of the Pelennor Fields.</p>
		<p>Meanwhile, Sam rescues Frodo from the tower of Cirith Ungol. They set out across Mordor. Aragorn leads an army of men from Gondor and Rohan to march on the Black Gate of Mordor, so as to distract Sauron from his true danger. His army is vastly outnumbered by the great might of Sauron. Frodo and Sam reach the edge of the Cracks of Doom, but Frodo cannot resist the Ring any longer. Frodo claims the Ring for himself and puts it on his finger. Gollum suddenly reappears, having caught up with the hobbits. He struggles with Frodo and bites off Frodo's finger with the Ring on it. Celebrating wildly, Gollum loses his footing and falls into the Fire, taking the Ring with him. The Ring is destroyed, and Sauron loses his power forever. The Nazgûl perish, and Sauron's armies are thrown into such disarray that Aragorn's forces emerge victorious.</p>
		<iframe class="ttrailer" src="https://youtube.com/embed/r5X-hFf6Bwo" frameborder="0"></iframe>
		<p>Aragorn is crowned Elessar, King of Arnor and Gondor, and weds Arwen, daughter of Elrond. The four hobbits make their way back to the Shire, only to find out that the Shire has been enslaved by bad men. The hobbits raise a rebellion and overthrow the men, who turn out to be led by Saruman. Frodo does not allow the hobbits to kill Saruman, but Gríma turns on Saruman and kills him in front of Bag End (Frodo's hobbit-hole). He is slain in turn by hobbit archers, and the War of the Ring comes to its true end on Frodo's very doorstep.</p>
		<p>Merry and Pippin are celebrated as heroes. Sam marries Rosie Cotton and uses his gifts from Galadriel to help heal the Shire. But Frodo is still wounded in body and spirit, having borne the Ring for so long.</p>
		<p>A few years later, in the company of Bilbo and Gandalf, Frodo sails from the Grey Havens west over the Sea to the Undying Lands to find peace.</p>
	</div>
	<div class="return-download clearfix">
		<div class="download-task-3">
			<h3>The Lord of the Rings The Return of the King<br> Extended Edition</h3>
			<ul>
				<li>Part: 3</li>
				<li>IMDb Rating: 8.9/<sub>10</sub></li>
				<li>Release Date: 17/12/2003</li>
				<li>Duration: 04:23:09</li>
				<li>Downloads: <?php echo $record; ?></li>
			</ul>
			<form action="the-return-of-the-king.php" method="post">
				<button type="submit" name="download-butt-1">Download 720p</button><button type="submit" name="download-butt-2">Download 1080p</button>
			</form>
		</div>
		<div class="torrent-from">
			<img src="./img/yify-torrents-logo.png" alt="YIFY Torrents Logo">
		</div>
	</div>
	<div class="foot">
		<h4>© <?php echo date('Y'); ?> LORDOFTHERINGSTRILOGY.COM: Created By Ushan Mithma<sup>®</sup></h4>
	</div>
</body>
</html>