<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        if(isset($_SESSION['teller'])) {
            $_SESSION['teller']++;
        }
        else {
            $_SESSION['teller'] = 1;
        }
        $bericht = "U heeft deze pagina ". $_SESSION['teller']." keer bekeken.";
        echo $bericht;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>