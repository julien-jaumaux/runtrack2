<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tableau variables </title>
</head>
<?php
$myBool = true;
$int = 5;
$string = 'julien';
$float = 5.2;
?>
<body>
    <table>
        <tr id="header">
            <td>Type</td>
            <td>Nom</td>
            <td>Valeur</td>
        </tr>
        <tr >
            <td class="left">Boolean</td>
            <td>$myBool</td>
            <td><?php echo $myBool?></td>
        </tr>
        <tr>
            <td class="left">Integer</td>
            <td>$int</td>
            <td><?php echo $int?></td>
        </tr>
        <tr>
            <td class="left">String</td>
            <td>$string</td>
            <td><?=$string?></td>
        </tr>
        <tr>
            <td class="left">Float</td>
            <td>$float</td>
            <td><?=$float?></td>
        </tr>

    </table>
</body>
</html>