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
        $today = date("l j F Y");
        echo "Het is vandaag: $today" . "<br>";
        echo "Vandaag is het de" . date("XXX") . "van het jaar." . "<br>";
        echo date("l") . "is de" . date("XXX") . "dag van de week." . "<br>";
        echo "De maand" . date("l") . "heeft in totaal 31 dagen." . "<br>";
        echo "Het jaar" . date("l") . "is geen schrikkeljaar" . "<br>";
    ?>
</body>
</html>