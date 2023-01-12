<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str inversé</title>
</head>
<body>
    <?php
    $str = "Les choses que l'on possede finissent par nous posseder.";
    $i = -1;
    while (isset($str[$i]) == true) {
        echo $str[$i];
        $i = $i - 1;
    }



    ?>
</body>
</html>