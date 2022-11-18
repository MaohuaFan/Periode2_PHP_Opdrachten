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
            $uur = date("H");
            switch($uur) {
                case ($uur > 6 && $uur < 12):
                    echo"Het is octend";
                    break;
                case ($uur > 12 && $uur < 18):
                    echo"Het is middag";
                    break;
                case ($uur > 18 && $uur < 24):
                    echo"Het is avond";
                    break;
                    case ($uur > 24 && $uur < 6):
                        echo"Het is nacht";
                        break;
            }
    ?>
</body>
</html>