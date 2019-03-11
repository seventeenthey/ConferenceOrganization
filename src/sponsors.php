<!DOCTYPE html>
<html lang="en">

<head>
    <title>Conference Organizing System | Sponsors</title>
	<meta charset="utf-8" />
	<meta name="author" content="Group 99"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif|Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
	<header>
		<a href="index.html">
			<img src="./img/placeholder_personal_portrait.jpg" alt="Portrait of River Lawrence"/>
		</a>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
                <li><a href="subcommittees.php">Sub-Committees</a></li>
				<li><a href="./schedule.html">Schedule</a></li>
                <li><a href="./sponsors.php">Sponsors</a></li>
                <li><a href="attendees.html">Attendees</a></li>
                <li><a href="hotelrooms.html">Hotel Rooms</a></li>
                <li><a href="functions.html">Functions</a></li>
			</ul>
		</nav>
	</header>

	<div id="main-content">
        <h1 id="page-title">Sponsor</h1>
        <table>
            <tr>
                <th>Company name</th>
                <th>Level of sponsorship</th>
            </tr>
            <?php
            $pdo = new PDO('mysql:host=localhost:3307;dbname=conferenceorganization', "root", "");
            $sql = "Select name, sponsor_level from sponsor_companies;";
            $stmt = $pdo->query($sql);

            while ($item = $stmt->fetch()) {
                echo "<tr><td>" . $item["name"] . "</td><td>" . $item["sponsor_level"] . "</td></tr>";
            }
            ?>
        </table>
	</div> <!-- #main-content -->

    <footer>
		<img src="./img/drapeau_ontario-ontario_flag.jpg" alt="Ontario provincial flag"/>
	</footer>

</body>
</html>