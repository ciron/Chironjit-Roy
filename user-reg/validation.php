<?php 
    // include_once '../user-reg/database.php';
    include_once 'database.php';

    if(isset($_REQUEST["save"]))
    {
        $username = $_REQUEST["username"];
        $pass = $_REQUEST["pass"];
        $sql = mysqli_query($con, "SELECT * FROM sign WHERE username = '$username' and pass= '$pass'");
        $row = mysqli_num_rows($sql);
        if($row==true){
          header('location:../practice2/index.php');
        }else {
           header('location:login.php');
        }
        
    }
   
?>