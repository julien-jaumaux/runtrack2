<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire get pair/impair</title>
</head>
<body>
<div id="container">
    
    <form action="" method="get">
    
    <label><b>nombres:</b></label>
    <input type="number" placeholder="Entrer le nombre" name="nombre" required>

    <input type="submit" id='submit' value='soumettre' >

    <?php

        if(isset($_GET["nombre"])){
            if ($_GET["nombre"]  % 2 == 0) {
                echo "Ce nombre est pair";
            }
            else{
                echo "Ce nombre est impair";
            }
        }
    ?>



</body>
</html>