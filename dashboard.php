<!DOCTYPE html>
<html lang="en">
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

    <title>Dashboard</title>

</head>
<?php
   include('session.php');
?>
<body class="bg-danger">
    <?php
        echo "<h2>Welcome user ".$login_session."</h2>";
    ?>
    <div class="container">
        <div style="padding: 5%;"  class="row">
            <div class="col-md-3 col-xl-3 col-sm-6 col-6">
                <a href="addStudent.html" style="text-decoration: none; font-size: 20px;" class="dashboard_img">
                <img width="100%" class="" src="./Assets/img/add_student_img.jpg">
                <p class="bg-success text-center font-weight-bold">Add student<br/></p>
                </a>
            </div>
            <div class="col-md-3 col-xl-3 col-sm-6 col-6">
                <a href="allStudent.php" style="text-decoration: none; font-size: 20px;" class="dashboard_img">
                    <img width="100%" class="" src="./Assets/img/mng_student_img.jpg">
                    <p class="bg-success text-center font-weight-bold">Manage Students<br/></p>
                </a>
            </div>
            
            <div class="col-md-3 col-xl-3 col-sm-6 col-6">
                <a href="viewAll.php" style="text-decoration: none; font-size: 20px;" class="dashboard_img">
                    <img width="100%" class="" src="./Assets/img/search_student_img.jpg">
                    <p class="bg-success text-center font-weight-bold">Search Student(AJAX)<br/></p>
                </a>
            </div>
            <div class="col-md-3 col-xl-3 col-sm-6 col-6">
                <a href="logout.php" style="text-decoration: none; font-size: 20px;" class="dashboard_img">
                    <img width="100%" class="" src="./Assets/img/search_student_img.jpg">
                    <p class="bg-success text-center font-weight-bold">Logout<br/></p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>