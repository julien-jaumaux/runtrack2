<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorythme nombre premier</title>
</head>
<body>
<?php
for($i=2;$i<1000;$i++)
{
	for($j=2;$j<$i;$j++)
	{
		if(($i%$j)==0) break;
		if($j==($i-1)) echo "$i<br>"; 
	}
}
?>
    
</body>
</html>