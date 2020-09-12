<?php

session_start();

$co = mysqli_connect("localhost", "root", "" , "profile");
$select = "SELECT * FROM `users`";
$q = mysqli_query($co,$select);
$res = mysqli_fetch_assoc($q);
$ali = [];
while($res = mysqli_fetch_assoc($q)){
        $ali[] = $res;
}

for($i = 0; $i <= count($ali) - 1;$i++){
    $resultF = $ali[$i];
     $resultF["id"];
     $resultF["name"];
     $resultF["password"];
     $resultF["email"];
}

$username = $resultF["id"];
$password = $resultF["email"];

echo $username;

echo $password;
$Uname = $_POST['username'];

$pass = $_POST['password'];


if($username == $Uname && $password == $pass)
{
    $_SESSION['userdata'] = $_POST['username'];
    header('LOCATION:home.php');    
} 

