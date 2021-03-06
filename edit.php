

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- font-awesome icon link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>20MCA002</title>
</head>
<?php
   include('session.php');
?>
<?php

include "config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($link,"select * from student where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $city = $_POST['city'];
    $pcode = $_POST['pcode'];
    $mno = $_POST['mno'];
	
    $edit = mysqli_query($link,"update student set sid='$sid', sname='$sname' , city='$city', pcode='$pcode', mno='$mno'  where id='$id'");
	
    if($edit)
    {
        mysqli_close($link); // Close connection
        header("location:allStudent.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "there is some error";
    }    	
}
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-6 col-sm-12 col-12">
                <img width="100%" class="" src="./Assets/img/add_student_img.jpg">
            </div>
            <div class="col-md-6 col-xl-6 col-sm-12 col-12">
                <br/><br/><br/><br/><br/><br/>
                <form class="" method="POST">
                    <div class="form-group">
                      <label for="sid">Student ID</label>
                      <input type="text" class="form-control" value="<?php echo $data['sid'] ?>" id="sid" name="sid"  />
                    </div>
                    <div class="form-group">
                        <label for="sname">Student Name:</label>
                        <input type="text" class="form-control" value="<?php echo $data['sname'] ?>"  id="sname" name="sname"   />
                      </div>
                      <div class="form-group">
                        <label for="city">Student's City:</label>
                        <input type="text" class="form-control" value="<?php echo $data['city'] ?>"  id="city" name="city"  />
                      </div>
                      <div class="form-group">
                        <label for="pcode">Pincode:</label>
                        <input type="text" class="form-control" value="<?php echo $data['pcode'] ?>"  id="pcode" name="pcode"  />
                      </div>
                      <div class="form-group">
                        <label for="mno">Mobile Number:</label>
                        <input type="text" class="form-control" value="<?php echo $data['mno'] ?>" id="mno" name="mno"  />
                      </div>
                    <div>
                      <input class="btn btn-danger btn-lg" name="update" type = "submit" value = "Update"></input>
                    </div>
                    <br/>
                    </form>
            </div>
        </div>

    </div>
    
</body>
</html>