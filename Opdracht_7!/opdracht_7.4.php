<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    Prijs <input type="number" name="geldbedrag" value="prijs"><br>
    Korting (%) <input type="number" name="geldbedrag" value="korting">
    <br><input type="submit" name="uitrekenen" value="Uitrekenen">
    </form>

    <?php

        if(isset($_POST["geldbedrag"])) {
            function number_formats() {
            $prijs = $_POST["prijs"];
            $korting = 100 - $_POST["korting"];
            $som = $prijs * $korting;
            echo"Bedrag inclusief $korting% korting: €$som";
            }
        }
    ?>
</body>
</html>