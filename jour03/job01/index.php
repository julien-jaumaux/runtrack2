<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau</title>
</head>
<body>
    <?php
    $number=array('200','204','173','178','171','404','459');
    foreach($number as $key => $number){
    if($number%2 == 0){
    echo $number.' Est paire<br>';
    }
    else{
        echo $number.' Est impair<br>';
    } 
    
    }
    ?>
</body>
</html>