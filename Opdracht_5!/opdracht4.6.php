<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tijd = date("H:i:s");
        $uur = date("H");
        $temperatuur = 19;
        $luchtvochtigheid = 95;
        echo"$tijd<br>";

        if ($uur > 17.00 || $temperatuur < 20 && $luchtvochtigheid < 85){
            echo"De airco is uit.";
        }
        else {
            echo"De airco is aan.";
        }
    ?>
</body>
</html>