<?php


start_sesion();

$id = $_GET['id'];
 
$co = mysqli_connect("localhost", "root", "" , "profile");

//$insert = "INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$username', '$email','$password')";

$delete = "DELETE FROM `users` WHERE `id` = $id";

//$update = "UPDATE `users` SET `user` = $username WHERE `id` = $id";

//$select = "SELECT * FROM `users`";

mysqli_query($co,$delete);

//header("LOCATION:form.html");



$res = mysqli_affected_rows($co);

if($res == 1)
{
        echo "Done";
} else 
{
        echo "Error";
}













/*
        INSERT

$username = $_POST['user'];

$email = $_POST['email'];

$password = $_POST['password'];

$co = mysqli_connect("localhost", "root", "" , "profile");

$insert = "INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$username', '$email','$password')";

mysqli_query($co,$insert);

header("LOCATION:form.html");

*/ 