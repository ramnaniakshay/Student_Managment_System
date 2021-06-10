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

   
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","students.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
<?php
   include('session.php');
?>
</head>
<body class="bg-danger">
<div class="container">
  <form>
    <a href="dashboard.php" class="btn btn-success">Back to Dashboard</a>
    Student ID:
    <select name="users" onchange="showUser(this.value)">
      <option disabled selected>-- Select Student --</option>
      <?php
          include "config.php";  // Using database connection file here
          $records = mysqli_query($link, "SELECT sid,id From student");  // Use select query here 
  
          while($data = mysqli_fetch_array($records))
          {
              echo "<option value='". $data['id'] ."'>" .$data['sid'] ."</option>";  // displaying data in option menu
          }	
      ?>  
    </select>
  </form>
  <div id="txtHint"><b>Please pick the ID to view its information...</b></div>
  <?php mysqli_close($link);  // close connection ?>
<br>
</div>
</body>
</html>