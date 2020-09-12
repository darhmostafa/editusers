<?php


$username = $_GET['user'];

$email = $_GET['email'];

$password = $_GET['password'];

 
$co = mysqli_connect("localhost", "root", "" , "profile");

$insert = "INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$username', '$email','$password')";


mysqli_query($co,$insert);




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