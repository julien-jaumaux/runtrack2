<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trianle algo</title>
</head>
<body>
<?php
$hauteur= 5;
  
for ($i = 0; $i < $hauteur; $i++)
{
    echo str_repeat('&nbsp;',($hauteur-$i));
    for($j = 0; $j <= $i; $j++)
    {
        echo "<b>*</b> ";
    }
echo "<br />";
}
?>
</body>
</html>