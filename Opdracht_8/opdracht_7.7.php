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
        Startkapitaal: <input type="number" name="kapitaal" value="kapitaal">
    <br>Rentepercentage: <input type="number" name="rente" value="rente">
    <br>Jaarlijkse opname: <input type="number" name="opname" value="opname">
    <br><input type="submit" name="uitrekenen" value="Uitrekenen" >
    </form>

    <?php
    if(isset($_POST["uitrekenen"])) {
        $kapitaal = $_POST["kapitaal"];
        $rente = $_POST["rente"];
        $opname = $_POST["opname"];
        $teller = 0;
        while ($som != 0) {
            $som = $kapitaal * (1+($rente/100));
            $teller++;
        }
        echo"U kunt $teller jaar lang $opname opnemen";
    }

    ?>
</body>
</html>