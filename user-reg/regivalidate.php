  
<?php
include_once 'database.php';
if(isset($_POST['save']))
    {	 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $city_name = $_POST['city_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        // $sql = "INSERT INTO sign (first_name,last_name,username,pass,cpass,city_name,email,gender)
        // VALUES ('$first_name','$last_name','$username','$pass','$cpass','$city_name','$email','$gender')";
        $insertdb = mysqli_query($con,"SELECT username FROM sign WHERE username='$username'");
        $userexist = mysqli_num_rows($insertdb);
       if ($userexist>0) {
           echo 'username exist';
       //    header('location:insert.php');
       }      
       else{
           $sql = "INSERT INTO sign (first_name,last_name,username,pass,cpass,city_name,email,gender)
       VALUES ('$first_name','$last_name','$username','$pass','$cpass','$city_name','$email','$gender')";
           header('location:../practice2/index.php');
       }
        
    }

?>