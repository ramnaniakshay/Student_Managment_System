<?php

require_once "config.php";

if(isset($_POST['signup'])){
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $fname = $_POST['fname'];
    
    //check upload file not error than insert data to database
    if(!isset($errorMsg)){
        $sql = "insert into user(email,pass,fname)
                values('".$email."','".$pass."','".$fname."')";
        $result = mysqli_query($link, $sql);
        if($result){
            $successMsg = 'New record added successfully';
            header('location: index.html');
        }else{
            $errorMsg = 'Error '.mysqli_error($link);
        }
    }

}
?>
