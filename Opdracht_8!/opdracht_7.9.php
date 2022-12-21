<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ZEt hier je tekst om</h1>
    <form action="#" method="post">
        <input type="text" name="Tekstveld" placeholder="Voer een tekst in."> <br>
        <input type="radio" name="Letters" value="HoofdLetters"> In hoofdletters <br>
        <input type="radio" name="Letters" value="KleineLetters"> In kleine letters <br>
        <input type="radio" name="Letters" value="EerstHoofdletter"> Eerste letter hoofdletter <br>
        <input type="radio" name="Letters" value="ElkWoordHoofdLetter"> Eerste letter ieder woord hoofletter <br>
        <input type="submit" value="Verzenden">
    </form>
    <?php
        if(isset($_GET["Letters"])) {
            switch($_GET["Letters"]) {
                case 'Hoofdletters':
                    echo strtoupper($_GET["Tekstveld"]);
                    break;
                case 'KleineLetters':
                    echo strtolower($_GET["Tekstveld"]);
                    break;
                case 'EerstHoofdletter':
                    echo ucfirst($_GET["Tekstveld"]);
                    break;
                case 'ElkWoordHoofdLetter':
                    echo ucwords($_GET["Tekstveld"]);
                    break;
            }
        }
    ?>
</body>
</html>