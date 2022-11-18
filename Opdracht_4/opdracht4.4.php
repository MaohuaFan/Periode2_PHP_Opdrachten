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
        $product = 55;
        if ($product > 150){
            $product = $product * 1.19;
            echo "De nieuwe prijs is $product";
        }
        elseif ($product < 55){
            $product = $product * 1.11;
            echo "De prijs is gestegen tot $product";
        }
        else {
            echo "het prijs is $product gebleven";
        }
    ?>
</body>
</html>