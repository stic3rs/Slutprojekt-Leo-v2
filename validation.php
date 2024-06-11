<?php
$Username = "bab";
$Password = "bob";

if($_POST["username"] == $Username && $_POST["password"] == $Password)
{
    session_start();
    $_SESSION["loggedIn"] = 1;   
    header("Location: index.php");
}
?>