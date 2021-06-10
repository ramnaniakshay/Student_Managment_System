<?php
   include('session.php');
?>
<?php
require_once "config.php";

if(isset($_POST['add'])){
    
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $city = $_POST['city'];
    $pcode = $_POST['pcode'];
    $mno = $_POST['mno'];
    
    //check upload file not error than insert data to database
    if(!isset($errorMsg)){
        $sql = "insert into student(sid,sname,city,pcode,mno)
                values('".$sid."','".$sname."','".$city."','".$pcode."','".$mno."')";
        $result = mysqli_query($link, $sql);
        if($result){
            $successMsg = 'New record added successfully';
            header('location: dashboard.php');
        }else{
            $errorMsg = 'Error '.mysqli_error($link);
        }
    }

}
?>
