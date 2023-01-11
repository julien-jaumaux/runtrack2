<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau voyelle consonne</title>
</head>
<body>
    <?php
    $str = 'On n\'est pas le meilleur quand on le croit mais quand on le sait.';
    $dic = ['consonnes' => 'BbCcDdFfGgHhJjKkLlMmNnPpQqRrSsTtVvWwXxZz',
            'voyelles' => 'AaEeIiOoUuYy'
            ];
    $voyelles = 0;
    $consonnes = 0;

            for($a = 0; isset($str[$a]); $a++){
                for($i =0; isset($dic["voyelles"][$i]); $i++){
                    if ($str[$a] == $dic["voyelles"][$i])
                    $voyelles++;

                }
                for ($i = 0; isset($dic["consonnes"][$i]); $i++){
                    if($str[$a] == $dic["consonnes"][$i])
                    $consonnes++;
                }
            }



            echo "<table border=5>
                        <tr>
                            <th>consonnes</th>
                            <th>voyelles</th>
                        </tr>
                        <tr>
                            <td>$consonnes</td>
                            <td>$voyelles</td>
                        </tr>          
            </table>";
    
    ?>
    
</body>
</html>