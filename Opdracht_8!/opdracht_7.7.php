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
        Startkapitaal: <input type="number" name="start" value="100000">   <br>
        Rentepercentage: <input type="number" name="rente" value="4" max="8">   <br>
        Jaarlijkse opname: <input type="number" name="opname" value="5000" min="4700">   <br>
        <input type="submit" value="Toevoegen">
    </form>

    <?php
        if (isset($_POST["start"])) {
            $start = $_POST["start"];
        } else {
            $start = 100000;
        }
        if(isset($_POST["rente"])) {
            $rente = $_POST["rente"];
        } else {
            $rente = 4;
        }
        if(isset($_POST["opname"])) {
            $opname = $_POST["opname"];
        } else{
            $opname = 5000;
        }
            $bedrag = $start/100*(100+$rente);
            $jaren = 0;

        if($opname > 4079) {
            while ($bedrag > $opname) {
                $bedrag -= $opname;
                $bedrag = $bedrag / 100 * (100 + $rente);
                $jaren++;
            }
            echo"U kunt $jaren jaar lang $opname opnemen";
        } else {
            echo"De opname is te laag binnen 100 jaren.";
        }
    ?>
</body>
</html>