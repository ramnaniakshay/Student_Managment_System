<!DOCTYPE html>
<html>
<head>
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


</head>
<body>
<?php
   include('session.php');
?>
<?php
$q = intval($_GET['q']);
require_once "config.php";

$sql="SELECT * FROM student WHERE id = '".$q."'";
$result = mysqli_query($link,$sql);

echo "<table class='table'>
<tr class='bg-success'>
<th>Student ID</th>
<th>Student Name</th>
<th>City</th>
<th>Pincode</th>
<th>MobileNumber</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr class='bg-primary'>";
  echo "<td>" . $row['sid'] . "</td>";
  echo "<td>" . $row['sname'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['pcode'] . "</td>";
  echo "<td>" . $row['mno'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($link);
?>
</body>
</html>