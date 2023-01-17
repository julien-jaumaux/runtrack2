<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function occurences($str,$char){
        $i = 0;
        $j = 0;
        while (isset($str[$i])){
            if($str[$i] == $char){
                $j++;
            }
            $i++;
        }
        return $j;
    }
    echo occurences('Bonjour', 'o');

    ?>
    
</body>
</html>