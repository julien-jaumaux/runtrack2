<?php
if(($_GET["style"] == "style1")){
    ?>
<link rel="stylesheet" href="style1.css">
<?php
}
if(($_GET["style"] == "style2")){
    ?>
<link rel="stylesheet" href="style2.css">
<?php
}
if(($_GET["style"] == "style3")){
    ?>
<link rel="stylesheet" href="style3.css">
<?php
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
    <title>Formulaire multistyle</title>
</head>
<body>
    <h1>Formulaire multistyle</h1><br>

        <form action="" method="get" class="form">
            <select name="style">
                <option value="style1">Style1</option>
                <option value="style2">Style2</option>
                <option value="style3">Style3</option>
            </select>
            <div class="form">
            <label for="name">Nom: </label>
            <input type="text" name="name">
            </div>
            <div class="form">
            <label for="email">E-mail: </label>
            <input type="email" name="email">
            </div>
            <div class="form">
            <input type="submit" value="Envoyer!">
            </div>
        </form>
</body>
</html>