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
    <input type="number" name="getal" placeholder="Vul een getal in...">
    <input type="submit" value="Verzenden">
</form>
    <?php 
        if(isset($_POST['getal'])){
            $getal = $_POST['getal'];
            echo"Is het getal $getal even? ";
            if($getal % 2 == 0){
                echo"Ja";
            }
            elseif($getal % 2 == 1){
                echo"Nee";
            }
        }
    ?>
</body>
</html>