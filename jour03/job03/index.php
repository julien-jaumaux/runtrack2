<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voyelle algo</title>
</head>
<body>
    <?php
    $str = "i'm sorry Dave I'm afraid I can't do that.";
    $lettre = array("a","e","i","o","u","y");
    $d = 0;
    while (isset($str[$d]) == true){
        foreach ($lettre as $key => $value) {
            if ($str[$d] == $value) {
                echo $str [$d];
            }
            
        } 
        $d = $d+1;   
    }
    ?>
    
</body>
</html>