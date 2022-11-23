<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hallo Wereld!</h1>
    <p>Heb nog geen boek</p>
    <?php
        date_default_timezone_set("Europe/Amsterdam");
        echo "Het is vandaag: ".date("l j F Y")."<br>";
        echo "Vandaag is het de ".date("z")."e van het jaar."."<br>";
        echo date("l")." is de ".date("w")."e dag van de week."."<br>";
        echo "De maand ".date("F")." heeft in totaal ".date("t")." dagen."."<br>";      
        if (date("L") == 0) {
            echo "Het jaar " . date("Y") . " is geen schikkeljaar" . "<br>";
        }
        else {
            echo "Het jaar " . date("Y") . " is een schikkeljaar" . "<br>";
        }
    ?>
</body>
</html>