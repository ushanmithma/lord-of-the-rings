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
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
	<link rel="stylesheet" type="text/css" href="./css/fellowship-of-the-ring.css">
	<link rel="icon" href="./img/tlotr.png" type="image/png" sizes="16x16">
	<title>The Fellowship of the Ring - LORD OF THE RINGS TRILOGY</title>
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
				<a class="nav-bar-link-left" href="index.php"><li>The Lord of the Rings</li></a><a href="the-fellowship-of-the-ring.php" style="background: #000000;"><li>The Fellowship of the Ring</li></a><a href="the-two-towers.php"><li>The Two Towers</li></a><a class="nav-bar-link-right" href="the-return-of-the-king.php"><li>The Return of the King</li></a>
			</ul>
		</div>
	</div>
	<div class="fellowship-task clearfix">
		<h2>The Lord of the Rings The Fellowship of the Ring</h2>
		<img src="./img/the-fellowship-of-the-ring.jpg" alt="the-fellowship-of-the-ring">
		<p>An ancient Ring thought lost for centuries has been found, and through a strange twist in fate has been given to a small Hobbit named Frodo. When Gandalf discovers the Ring is in fact the One Ring of the Dark Lord Sauron, Frodo must make an epic quest to the Cracks of Doom in order to destroy it! However he does not go alone. He is joined by Gandalf, Legolas the elf, Gimli the Dwarf, Aragorn, Boromir and his three Hobbit friends Merry, Pippin and Samwise. Through mountains, snow, darkness, forests, rivers and plains, facing evil and danger at every corner the Fellowship of the Ring must go. Their quest to destroy the One Ring is the only hope for the end of the Dark Lords reign!</p>
		<p>The story begins in the Shire, where the hobbit Frodo Baggins inherits the Ring from Bilbo Baggins, his cousin and guardian. Neither hobbit is aware of the Ring's nature, but Gandalf the Grey, a wizard and an old friend of Bilbo, suspects it to be Sauron's Ring. After Gandalf confirms his suspicions, he tells Frodo the history of the Ring and counsels him to take the Ring away from the Shire. Frodo leaves the Shire, in the company of his gardener and friend, Samwise ("Sam") Gamgee, and two cousins, Meriadoc Brandybuck, called Merry, and Peregrin Took, called Pippin. They are nearly caught by the Black Riders while in the Shire, but they shake off pursuit by cutting through the Old Forest. There, they are aided by Tom Bombadil, a strange and merry fellow who lives with his wife Goldberry in the forest. Surprisingly, the Ring has no power over him.</p>
		<p>The Hobbits leave the Old Forest and reach the town of Bree, where Gandalf is expected to meet them. Instead, they meet a Ranger named Strider, whom Gandalf had mentioned in a letter. Strider persuades the hobbits to take him on as their guide and protector. Together, they leave Bree after another close escape from the Black Riders. On the hill of Weathertop, they are again attacked by the Black Riders, who wound Frodo with a cursed blade. Strider fights off the Black Riders with fire and leads the hobbits towards the Elven refuge of Rivendell. Frodo falls deathly sick from the wound. The Black Riders nearly overtake Frodo at the Ford of Bruinen, but flood waters summoned by Elrond, master of Rivendell, rise up and overwhelm them.</p>
		<iframe class="ttrailer" src="https://youtube.com/embed/aStYWD25fAQ" frameborder="0"></iframe>
		<p>Frodo recovers in Rivendell under the care of Elrond. The Council of Elrond speaks of the history of Sauron and the Ring. Strider is revealed to be Aragorn, the heir of Isildur. Gandalf reveals that Sauron has corrupted Saruman, chief of the wizards. The Council decides that the Ring must be destroyed, but that can only be done by sending it to the Fire of Mount Doom in Mordor, where it was forged. Frodo takes this task upon himself. Elrond, with the advice of Gandalf, chooses companions for him. The Company of the Ring are nine in number: Frodo, Sam, Merry, Pippin, Aragorn, Gandalf, Gimli the Dwarf, Legolas the Elf, and the Man Boromir, son of the Ruling Steward Denethor of the land of Gondor.</p>
		<p>After a failed attempt to cross the Misty Mountains through the Redhorn Pass across the flank of Caradhras, the Company are forced to try a dangerous path through the Mines of Moria. They are attacked by the Watcher in the Water before the doors of Moria. Inside Moria, they learn of the fate of Balin and his colony of Dwarves. After surviving an attack, they are pursued by Orcs and by an ancient demon called a Balrog. Gandalf faces the Balrog, and both of them fall into the abyss. The others escape and find refuge in the Elven forest of Lothlórien, where they are counselled by Galadriel and Celeborn.</p>
		<p>With boats and gifts from Galadriel, the Company travel down the River Anduin to the hill of Amon Hen. Boromir tries to take the Ring from Frodo, but Frodo puts on the Ring and disappears. The Company is scattered in the panic to find Frodo, and they are attacked by Orcs. Frodo chooses to go alone to Mordor. Sam guesses Frodo's mind, and goes with him.</p>
	</div>
	<div class="fellowship-download clearfix">
		<div class="download-task-1 clearfix">
			<h3>The Lord of the Rings The Fellowship of the Ring<br> Extended Edition</h3>
			<ul>
				<li>Part: 1</li>
				<li>IMDb Rating: 8.8/<sub>10</sub></li>
				<li>Release Date: 19/12/2001</li>
				<li>Duration: 03:48:17</li>
				<li>Downloads: <?php echo $record; ?></li>
			</ul>
			<form action="the-fellowship-of-the-ring.php" method="post">
				<button type="submit" name="download-butt-1">Download 720p</button>
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