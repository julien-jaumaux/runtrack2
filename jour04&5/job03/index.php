<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>algo post</title>
</head>
<body>
<form action="" method="post" class="formCol">
        <label for="nom">Qel est votre nom:</label>
        <input type="text" name="nom" id="nom"><br>

        <label for="prenom">Quel est votre prenom:</label>
        <input type="text" name="prenom" id="prenom"><br>

        <label for="age">Quel est votre age:</label>
        <input type="text" name="age" id="age"><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php

    $i=0;
    foreach($_POST as $key => $value){
        if($value !=""){
            $i++;
        }
   }
   echo "le nombre d'argument est :".$i;
    ?>
</body>
</html>