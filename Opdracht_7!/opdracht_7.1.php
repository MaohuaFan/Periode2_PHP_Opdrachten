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
        <p>Bedrag exclusief BTW
        <input type="text" name="bedrag" value=""></p>
        <input type="radio" name="BTW" value="negen">Laag, 9 %
        <input type="radio" name="BTW" value="eenentwintig">Hoog, 21 %
        <p><input type="submit" name="omzetten" value="Omzetten"></p>
    </form>
    <?php
    if(isset($_POST['BTW'])) {
        $btw = $_POST['BTW'];
        $bedrag =$_POST['bedrag'];

        if ($btw == "negen") {
            $som = $bedrag / 100 * 109;
            echo"Bedrag inclusief 9% BTW : &euro; $som,-";
        }
        elseif ($btw == "eenentwintig"){
            $som = $bedrag / 100 * 121;
            echo"Bedrag inclusief 21% BTW : &euro; $som,-";
        }
    }
    ?>
</body>
</html>