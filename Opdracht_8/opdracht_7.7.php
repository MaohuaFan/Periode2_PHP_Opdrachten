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
        Rentepercentage: <input type="number" name="rente" value="rente">
        Jaarlijke opname: <input type="number" name="opname" value="opname">
        <input type="submit" value="Bereken de looptijd">
        <?php
        if (isset($_POST["submit"])) {
            $startkapitaal = $_POST["kapitaal"];
            $rente = $_POST["rente"];
            $opname = $_POST["opname"];
            $som = ($startkapitaal * $rente) / $opname;
            echo "U kunt $som jaar lang €$opname opnemen.";
        }
        ?>
    </form>
</body>
</html>