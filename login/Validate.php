<?php
$Username = "tuan123";
$ActualPassword = "123";

if ($_POST["password"] == $ActualPassword && $_POST["Username"] == $Username) {
    session_start();
    $_SESSION["Authorised"] = "Y";
    header("Location:../post.php");
} else {
    header("Location:Wrongpassword.php");
}
