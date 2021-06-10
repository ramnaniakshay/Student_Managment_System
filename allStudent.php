<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css -->
    <link rel="stylesheet" href="./Assets/css/main.css">  
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- font-awesome icon link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>All students</title>
</head>
<body class="container bg-danger">


<a href="dashboard.php" class="btn btn-success">Back to Dashboard</a>
<h2 class="text-center">Student Details of ITNU</h2>

<table class="table" >
  <tr class="bg-success">
    
    <td><h3>Student ID</h3></td>
    <td><h3>Student Name</h3></td>
    <td><h3>City</h3></td>
    <td><h3>pincode</h3></td>
    <td><h3>Mobile Number</h3></td>
    <td><h3>Action</h3></td>
  </tr>

<?php

include "config.php"; // Using database connection file here

$records = mysqli_query($link,"select * from student"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr class="bg-primary">
    
    <td><?php echo $data['sid']; ?></td>
    <td><?php echo $data['sname']; ?></td>    
    <td><?php echo $data['city']; ?></td> 
    <td><?php echo $data['pcode']; ?></td> 
    <td><?php echo $data['mno']; ?></td>
    <td><a href="edit.php?id=<?php echo $data['id']; ?>"><span style="font-size: 22px; color:white" class="fa fa-edit text-secondary "></span></a>
    &nbsp;&nbsp;<a href="delete.php?id=<?php echo $data['id']; ?>"><span style="font-size: 22px;" class="fa fa-trash-alt text-danger"></span></a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>