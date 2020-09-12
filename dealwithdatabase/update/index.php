<?php




$id = $_GET['id'];

$username = $_GET['user'];
 
$co = mysqli_connect("localhost", "root", "" , "profile");


$update = "UPDATE `users` SET `name` = '$username' WHERE `id` = $id";


mysqli_query($co,$update);


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