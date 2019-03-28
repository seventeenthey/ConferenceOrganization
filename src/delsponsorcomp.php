<!DOCTYPE html>
<html lang="en">

<head>
    <title>Conference Organizing System | Functions</title>
    <meta charset="utf-8" />
    <meta name="author" content="Group 99"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif|Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<header>
    <!--Should be included in all .php and .html files-->
    <a href="index.php">
        <img src="./img/placeholder_personal_portrait.jpg" alt="Portrait of River Lawrence"/>
    </a>
    <?php
    include 'include\navigationmenu.php';
    ?>
</header>

<div id="main-content">

    <h1 id="page-title">Delete a Sponsorship Company</h1>
    <table>
        <caption> Sponsor Company </caption>
        <tr><th>Company name</th><th>ID</th><th>Sponsor level</th><th>Delete</th></tr>

        <?php
            $sql = "select name,id,sponsor_level from sponsor_companies";
            $stmt = $pdo->query($sql); 

        while ($item = $stmt->fetch()) {
            $comid = $item['id'];
            echo "<tr><td>"
                .$item['name']."</td><td name='id'>"
                .$item['id']."</td><td>"
                .$item['sponsor_level']."</td><td>";
            echo '<a href="deletecomp.php?comid='.$comid.'">delete</a></td>'; 
            echo '<script>console.log("'.$comid.'")</script>';
        }
        ?>
</table>
    <input type="button" value="Back" onclick="history.back()">

</div> <!-- #main-content -->

<footer>
    <img src="./img/qflag.jpg" alt="Ontario provincial flag"/>
</footer>

</body>
</html>
