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
    $mysqli = new mysqli("localhost", "root", "", "jour009");
    if ($mysqli -> connect_errno){
        echo "failed to connect to my MySQL" .$mysqli -> connect_error; 
        exit();
    }
    $request = $mysqli->query("SELECT SUM(superficie) AS 'superficie totale' FROM `etages`");
    $results = $request->fetch_array(MYSQLI_ASSOC);

    echo "<table border='1'><tr>";
    
    
    foreach ($results as $key => $value)
        {
        echo " <th> " . $key . " </th> ";
        }
        echo "</tr>";
        while ($results != NULL)
        {
        echo "<tr>";
        foreach ($results as $value)
        {
                echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
        $results = $request -> fetch_array(MYSQLI_ASSOC);
    }
    echo "</table>";
    ?>
</body>
</html> 