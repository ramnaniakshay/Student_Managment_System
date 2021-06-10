<?php

require_once "config.php";

if(isset($_POST['update']))
    {	
        $id = mysqli_real_escape_string($link, $_POST['id']);
        $sid = mysqli_real_escape_string($link, $_POST['sid']);
        $sname = mysqli_real_escape_string($link, $_POST['sname']);
        $city = mysqli_real_escape_string($link, $_POST['city']);
        $pcode = mysqli_real_escape_string($link, $_POST['pcode']);
        $mno = mysqli_real_escape_string($link, $_POST['mno']);
        if(empty($sid)) {	
            echo "<font color='red'>Student ID field is empty.</font><br/>";
        }
        else if(empty($sname)) {	
            echo "<font color='red'>student name field is empty.</font><br/>";
        }
        else if(empty($city)) {	
            echo "<font color='red'>city field is empty.</font><br/>";
        }
        else if(empty($pcode)) {	
            echo "<font color='red'>pincode field is empty.</font><br/>";
        }
        else if(empty($mno)) {	
            echo "<font color='red'>Mobile Number field is empty.</font><br/>";
        } else {	
            $result = mysqli_query($link, "UPDATE student SET sid='$sid',  sname='$sname',  city='$city', pcode='$pcode' , mno='$mno' WHERE id=$id");
           
           header("Location: index.html");
        }
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <?php
            $id = $_GET['id'];
            $result = mysqli_query($link, "SELECT * FROM student WHERE id=$id");
            while($res = mysqli_fetch_array($result))
            {
                $id=$res['id'];
                $sid = $res['sid'];
                $sname = $res['sname'];
                $city = $res['city'];
                $pcode = $res['pcode'];
                $mno = $res['mno'];
            }
        ?>
        <div class="container-fluid">
            <div class="row">
            <?php
                if(isset($errorMsg)){		
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMsg; ?>
                </div>
            <?php
                }
            ?>
            <?php
            if(isset($successMsg)){		
            ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $successMsg; ?> - Redirecting In A Moment 
                </div>
            <?php
                }
            ?>
                <div class="col-md-12">
                    <h2 class="mt-5">Add new Record</h2>
                    <p></p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Student ID</label>
                            <input type="text" name="sid" class="form-control" value="<?php echo $sid; ?>">

                        </div>
                        <div class="form-group">
                            <label>student name</label>
                            <input type="text" name="sname" class="form-control" value="<?php echo $sname; ?>">

                        </div>
                        <div class="form-group">
                            <label>city</label>
                            <input type="text" name="city" class="form-control" value="<?php echo $city; ?>">

                        </div>
                        <div class="form-group">
                            <label>pin code</label>
                            <input type="text" name="pcode" class="form-control" value="<?php echo $pcode; ?>">

                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" name="mno" class="form-control" value="<?php echo $mno; ?>">

                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                        <input type="submit" class="btn btn-primary" name="update" value="Submit">
                        
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>