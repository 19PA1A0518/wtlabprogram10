<?php
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $number=$_POST['number'];

    $conn= new mysqli('localhost','root','','reg');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into registration(name,password,email,number)values(?,?,?,?)");
        $stmt->bind_param("sssi",$name,$password,$email,$number);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
    }





?>