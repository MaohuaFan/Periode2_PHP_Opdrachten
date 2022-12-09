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
        function WillekeurigePostcode() {
            echo rand(1000,9999);
            $stringtekst = "ABCEDFGHIJKLMNOPQRSTUVWXYZ";
            $random = substr(str_shuffle($stringtekst), 0, 2);
            echo $random;
        }
        WillekeurigePostcode();
    ?>
</body>
</html>