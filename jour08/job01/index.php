<?php

session_start();

if(!isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"] = 0;
}
else{
    $_SESSION["nbvisites"] = $_SESSION["nbvisites"]+1;    
}
echo $_SESSION["nbvisites"];
if(isset($_GET["reset"])){
    session_destroy();
    header("location:index.php");
}

?>
<html>
<form action="index.php" method="get">
    <input type="submit" name="reset" value="reset">
</form>
</html>