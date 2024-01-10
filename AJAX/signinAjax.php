<?php
    include("Connection.php");
    session_start();

    $email=$_POST["email"];
    $pswd=$_POST["pswd"];

    $query=$db->prepare('SELECT * FROM user where email=?');
    $data=array($email);
    $execute=$query->execute($data);

    if($query->rowcount()>0){
        while($datarow=$query->fetch()){
            if($datarow["pswd"]=$pswd){
                echo 0;
            }
            else{
                echo "password incorrect";
            }
        }
    }
    else{
        echo "invalid credential";
    }

    
?>