<?php
session_start();
$_SESSION["username"]="admin";
$_SESSION["password"]="admin";
if(isset($_POST["btnlogin"])){
    if($_POST["username"]=="admin" && $_POST["password"]=="admin")
    {
        header("location:data.php");
    }else{
        echo "Maaf Username Atau Password Salah Gans!";
    }
}
?>