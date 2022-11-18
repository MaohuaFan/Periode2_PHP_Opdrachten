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
        $product = 56;
        if ($product > 150){
        $product = $product * 1.19;
        echo "$product";
        }
        elseif ($product < 55){
            $product = $product * 1.11;
            echo "$product";
        }
        else {
            echo "$product";
        }
    ?>
</body>
</html>