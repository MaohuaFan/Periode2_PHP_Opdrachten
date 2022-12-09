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
        <p>Getal 1 <input type="number" name="getal1" value="getal1"></p> 
        <input type="radio" name="rekenen" value="optellen"> Optellen
        <input type="radio" name="rekenen" value="aftrekken"> Aftrekken
        <input type="radio" name="rekenen" value="vermenigvuldigen"> Vermenigvuldigen
        <input type="radio" name="rekenen" value="delen"> Delen
        <p>Getal 2 <input type="number" name="getal2" value="getal2"></p> 
        <input type="submit" name="Berekenen" value="berekenen">        
    </form>

    <?php
        $waarde = $_POST["rekenen"];
        $getal1 = $_POST["getal1"];
        $getal2 = $_POST["getal2"];

        switch($waarde) {
            case"optellen":
                $som = $getal1 + $getal2;
                echo"$getal1 + $getal2 = $som";
            break;
            case"aftrekken":
                $som = $getal1 - $getal2;
                echo"$getal1 - $getal2 = $som";
            break;
            case"vermenigvuldigen":
                $som = $getal1 * $getal2;
                echo"$getal1 * $getal2 = $som";
            break;
            case"delen":
                $som = $getal1 / $getal2;
                echo"$getal1 / $getal2 = $som";
            break;
        }

    ?>
</body>
</html>