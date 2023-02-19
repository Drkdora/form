<?php

    $name = $_POST['name'];
    $father = $_POST['father'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $mail = $_POST['mail'];
    $ph = $_POST['ph'];
    $about = $_POST['about'];

    //connection to db
    $conn = new mysqli('localhost','root','','form2');
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into application(name, father,age, gender,state,mail,ph,about)values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssiissis",$name, $father,$age, $gender,$state,$mail,$ph,$about);
        $stmt->execute();
        echo "Successfully Registered";
        $stmt->close();
        $conn->close();
    }
?>