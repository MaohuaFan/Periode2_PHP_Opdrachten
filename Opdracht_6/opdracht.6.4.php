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
function Omtrek(){
    $pi = (pi());
    $lengte = $_POST['lengte'];
    $diameter = $lengte*2;
    $som = $diameter * $pi;
    $antwoord = number_format($som, 1);
    echo"De omtrek van een cirkel met straal $lengte is : $antwoord </br>";
}

function Oppervlakte(){
    $pi = (pi());
    $lengte = $_POST['lengte'];
    $som = $lengte * $lengte * $pi;
    $antwoord = number_format($som, 1);
    echo"De oppervlakte van een cirkel met straal $lengte is : $antwoord </br>";
}

if(isset($_POST['omtrek'])) {
    Omtrek();
}

if(isset($_POST['oppervlakte'])) {
    Oppervlakte();
}
?>

    <form action="#" method="post">
        <input type="number" name="lengte" placeholder="Geef lengte van de cirkle" required>
        <input type="submit" name="omtrek" value="Omtrek">
        <input type="submit" name="oppervlakte" value="Oppervlakte">

    </form>
</body>
</html>