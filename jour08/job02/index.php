<?php

if (!isset($_COOKIE["nbvisites"])) {  
    $_COOKIE["nbvisites"]= 1;
    setcookie("nbvisites", 1 , time()+36000);
    echo $_COOKIE["nbvisites"];    
} 

else {
    $_COOKIE["nbvisites"]++;
    setcookie("nbvisites", $_COOKIE["nbvisites"] , time()+36000);
    echo $_COOKIE["nbvisites"];
}

if (isset($_POST['reset'])) {
    setcookie("nbvisites", "", time()-36000);      
    unset($_POST['reset']);  
    header("location:index.php");  
}

?>
<form action="index.php" method="POST">
    <button type="submit" name="reset" >reset</button>

</form>
