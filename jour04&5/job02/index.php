<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau get</title>
</head>
<body>
<form action="" method="get" class="formCol">
        <label for="nom">Qel est votre nom:</label>
        <input type="text" name="nom" id="nom"><br>

        <label for="prenom">Quel est votre prenom:</label>
        <input type="text" name="prenom" id="prenom"><br>

        <label for="age">Quel est votre age:</label>
        <input type="text" name="age" id="age"><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
            echo "<table border=2><tr><th>argument</th><th>valeur</th></tr>";

    foreach($_GET as $key => $value){         
        
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";

    ?>

</body>
</html>