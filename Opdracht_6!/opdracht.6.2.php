<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        if(isset($_COOKIE['teller'])) {
            setcookie("teller", intval($_COOKIE['teller']) + 1);
        }
        else {
            setcookie("teller", 1);
        }

        if(isset($_COOKIE['teller'])) {
            echo "In totaal heb je deze pagina al: ". $_COOKIE['teller']. " keer bekenen.";
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
</body>
</html>