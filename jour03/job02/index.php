<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>
    <?php
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    $i = 0;
    while (isset($str[$i]) == true) {
        if($i %2 == 0){
            echo $str[$i];
        }
        $i = $i + 1;
    }
    ?>
    
</body>
</html>