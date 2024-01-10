<?php
    include("Connection.php");
    session_start();
    $name=$_POST['name'];
    $phnumber=$_POST['phnumber'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];


    $query=$db->prepare("INSERT INTO user(name,phnumber,email,pswd) values (?,?,?,?)");
    $data=array($name,$phnumber,$email,$pswd);
    $execute=$query->execute($data);

    if($execute){
        echo 0;
    }
    else{
        echo "error";
    }
?>