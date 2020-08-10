<?php

require_once ("config.php");

   
if (isset($_REQUEST['name']) & isset($_REQUEST['email']) & isset($_REQUEST['pass'])) {
    $name =trim(htmlspecialchars(htmlentities( $_REQUEST['name'])));
    $email =htmlspecialchars(htmlentities( $_REQUEST['email']));
    $pass =htmlspecialchars(htmlentities($_REQUEST['pass']));
    $secPass =md5($pass);

    if (empty($name & $email & $pass &$secPassr)) {
       header("location:index.php?action=false");
    }

             $InsertQuery ="INSERT INTO showcase ( Name, Email, Password) Values ('$name','$email','$pass')";
            $runQuery =mysqli_query($connect,$InsertQuery);
    

	

    
    if ($runQuery == true) {
        header ("Location:index.php?action=created");
    }else{
        header("Location:index.php?action=false");
    }
}
