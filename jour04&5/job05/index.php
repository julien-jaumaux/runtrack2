<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire connexion</title>
</head>
<body>
<div id="container">
    
    <form action="" method="POST">
    <h1>Connexion</h1>
    
    <label><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

    <label><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

    <input type="submit" id='submit' value='LOGIN' >
    <?php
        if(isset($_POST["username"]) && isset($_POST["password"])){
            if(($_POST["username"] == "John") && ($_POST["password"] == "Rambo")){
                echo "C'est pas ma guerre!";
            }
            else{
                echo "Votre pire cauchemar!";
            }
        }

    ?>
    </form>
</div>
</body>
</html>