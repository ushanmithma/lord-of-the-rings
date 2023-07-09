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
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
	<link rel="stylesheet" type="text/css" href="./css/trilogy.css">
	<link rel="icon" href="./img/tlotr.png" type="image/png" sizes="16x16">
	<title>Home - LORD OF THE RINGS TRILOGY</title>
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
				<a class="nav-bar-link-left" href="index.php" style="background: #000000;"><li>The Lord of the Rings</li></a><a href="the-fellowship-of-the-ring.php"><li>The Fellowship of the Ring</li></a><a href="the-two-towers.php"><li>The Two Towers</li></a><a class="nav-bar-link-right" href="the-return-of-the-king.php"><li>The Return of the King</li></a>
			</ul>
		</div>
	</div>
	<div class="all">
		<div class="lotr">
			<h2>The Lord of the Rings Extended Edition</h2>
			<img src="./img/trilogy.jpg" alt="The_Lord_of_the_Rings_Trilogy">
			<p>Thousands of years before the events of the novel, the Dark Lord Sauron had forged the One Ring to rule the other Rings of Power and corrupt those who wore them: the leaders of Men, Elves and Dwarves. Sauron was defeated by an alliance of Elves and Men led by Gil-galad and Elendil, respectively. Isildur, son of Elendil, cut the One Ring from Sauron's finger, causing Sauron to lose his physical form. Isildur claimed the Ring as an heirloom for his line, but when he was later ambushed and killed by the Orcs, the Ring was lost in the River Anduin at Gladden Fields.</p>
			<p>Over two thousand years later, the Ring was found by one of the river-folk called Déagol. His friend Sméagol fell under the Ring's influence and strangled Déagol to acquire it. Sméagol was banished and hid under the Misty Mountains. The Ring gave him long life and changed him over hundreds of years into a twisted, corrupted creature called Gollum. Gollum lost the Ring, his "precious", and as told in The Hobbit, Bilbo Baggins found it. Meanwhile, Sauron assumed a new form and took back his old realm of Mordor. When Gollum set out in search of the Ring, he was captured and tortured by Sauron. Sauron learned from Gollum that "Baggins" of the Shire had taken the Ring. Gollum was set loose. Sauron, who needed the Ring to regain his full power, sent forth his powerful servants, the Nazgûl, to seize it.</p>
			<p>The Lord of the Rings (also promoted as The Lord of the Rings: The Motion Picture Trilogy) is a film series consisting of three high fantasy adventure films directed by Peter Jackson. They are based on the novel The Lord of the Rings by J. R. R. Tolkien. The films are subtitled The Fellowship of the Ring (2001), The Two Towers (2002) and The Return of the King (2003). They were distributed by New Line Cinema.</p>
		</div>
		<div class="table-lotr">
			<table>
				<tr>
					<th>#</th>
					<th>Part</th>
					<th>IMDb Ratings</th>
					<th>Release Date</th>
					<th>Duration</th>
				</tr>
				<tr>
					<td>Part 1</td>
					<td>The Fellowship of the Ring</td>
					<td>8.8/<sub>10</sub></td>
					<td>19/12/2001</td>
					<td>03:48:17</td>
				</tr>
				<tr>
					<td>Part 2</td>
					<td>Two Towers</td>
					<td>8.7/<sub>10</sub></td>
					<td>18/12/2002</td>
					<td>03:55:24</td>
				</tr>
				<tr>
					<td>Part 3</td>
					<td>The Return of the King</td>
					<td>8.9/<sub>10</sub></td>
					<td>17/12/2003</td>
					<td>04:23:09</td>
				</tr>
			</table>
		</div>
		<div class="end-lotr">
			<img class="sp-tlotrt-im-w" src="./img/jrr-tolikien.jpg" alt="J R R Tolkien">
			<img class="sp-tlotrt-im-d" src="./img/peter-jackson.jpg" alt="Peter Jackson">
			<p>Considered to be one of the biggest and most ambitious film projects ever undertaken, with an overall budget of $281 million (some sources say $310-$330 million), the entire project took eight years, with the filming for all three films done simultaneously and entirely in New Zealand, Jackson's native country. Each film in the series also had special extended editions released on DVD a year after their respective theatrical releases. While the films follow the book's general storyline, they do omit some of the novel's plot elements and include some additions to and deviations from the source material.</p>
			<br>
			<div class="main-view-sp clearfix">
				<img  class="tlotrt-sp-lo" src="./img/tlotrt-sp.png" alt="based TLOTR"><iframe class="ttrailer" width="846" src="https://youtube.com/embed/cnf4h5HT4dc" frameborder="0"></iframe>
			</div>
			<p>Set in the fictional world of Middle-earth, the films follow the hobbit Frodo Baggins (Elijah Wood) as he and a Fellowship embark on a quest to destroy the One Ring, and thus ensure the destruction of its maker, the Dark Lord Sauron (Sala Baker). The Fellowship eventually splits up and Frodo continues the quest together with his loyal companion Sam (Sean Astin) and the treacherous Gollum (Andy Serkis). Meanwhile, Aragorn (Viggo Mortensen), heir in exile to the throne of Gondor, Legolas, Gimli, Merry, and Pippin, and the wizard Gandalf (Ian McKellen) unite to rally the Free Peoples of Middle-earth in the War of the Ring.</p>
			<p>The series was a major financial success, with the films collectively being among the highest-grossing film series of all time. The films were critically acclaimed and heavily awarded, winning 17 out of 30 total Academy Award nominations. The final film in the series, The Return of the King, won all of its 11 Academy Award nominations including Best Picture, which also tied it with Ben-Hur and Titanic for most Academy Awards received for a film. The series received wide praise for its innovative special and visual effects.</p>
		</div>
	</div>
	<div class="foot">
		<h4>© <?php echo date('Y'); ?> LORDOFTHERINGSTRILOGY.COM: Created By Ushan Mithma Kumara<sup>®</sup></h4>
	</div>
</body>
</html>