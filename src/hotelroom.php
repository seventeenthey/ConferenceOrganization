<!DOCTYPE html>
<html lang="en">

<head>
    <title>Conference Organizing System | Hotel Room</title>
    <meta charset="utf-8" />
    <meta name="author" content="Group 99"/>
    <meta name="viewport" content="width=device-width,initial-scale=1">
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
        <ul class="navbar">
            <li><a href="index.html">Home</a></li>
            <li><a href="./subcommittee.html">Sub-Committee</a></li>
            <li><a href="./schedule.html">Schedule</a></li>
            <li><a href="sponsor.php">Sponsor</a></li>
            <li><a href="./attendee.html">Attendee</a></li>
            <li><a href="./hotelroom.php">Hotel Room</a></li>
            <li><a href="./function.html">Function</a></li>
        </ul>
    </nav>
</header>

<div id="main-content">
    <h1 id="page-title">Hotel Rooms</h1>

<!--    <br>-->
<!--    <form action="php/indieroom.php" method="get">-->
<!--        Room Number:-->
<!--        <input type="text" name="roomnumber"><br>-->
<!--        <input type="submit" value="333">-->
<!--    </form>-->
<!--    <br>-->

    <ul>
        <table>
            <th>Room List</th>
            <?php
            $pdo = new PDO('mysql:host=localhost:3307;dbname=conferenceorganization', "root", "");
            $sql = "select room_number from hotel_rooms";
            $stmt = $pdo->query($sql);

            while ($item = $stmt->fetch()) {
            echo "<tr><td><form action='hotelroomdetail.php' method='get'>";
            echo "<input type='submit' name=".$item['room_number']." value=".$item['room_number']." </form></td></tr>";
            }
            ?>
        </table>
    </ul>


</div> <!-- #main-content -->

<footer>
    <img src="./img/drapeau_ontario-ontario_flag.jpg" alt="Ontario provincial flag"/>
</footer>

</body>
</html>
