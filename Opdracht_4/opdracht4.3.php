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
        $getal1 = 10;
        $getal2 = 20;
        $som = max($getal1, $getal2)*2 + min($getal1, $getal2);
        echo"$som";
    ?>
</body>
</html>