<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and pass sent from form 
      
      $email = mysqli_real_escape_string($link,$_POST['email']);
      $pass = mysqli_real_escape_string($link,$_POST['pass']); 
      
      $sql = "SELECT id FROM user WHERE email = '$email' and pass = '$pass'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $email and $pass, table row must be 1 row
		
      if($count == 1) {
         session_start();
         $_SESSION['login_user'] = $email;
         
         header("location: dashboard.php");
      }else {
         $error = "Your Login Name or pass is invalid";
      }
   }
?>