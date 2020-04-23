<?php

    $username = $_POST['uname'];
    $password = $_POST['psw'];
    
    if ($username == "sinjan" && $password == '123' ||$username == "marko" && $password == 'marko' ) {
     header ("Location: index.php");
} else {
     header ("Location: login.php");
}
?>
