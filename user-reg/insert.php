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
        
        $insertdb = mysqli_query($con,"SELECT username FROM sign WHERE username='$username'");
        $userexist = mysqli_num_rows($insertdb);
       if ($userexist>0) {
           echo 'username exist';
       //    header('location:insert.php');
       }      
       else{
           $sql =mysqli_query("INSERT INTO sign (first_name,last_name,username,pass,cpass,city_name,email,gender)
       VALUES ('$first_name','$last_name','$username','$pass','$cpass','$city_name','$email','$gender')");
           header('location:../practice2/index.php');
       }
       
        
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">

</head>
  <body>
	<div class="container">
        <div  id="reg-page">
        <h2>Registration Now !</h2>
            <form method="post" action="insert.php" id="regi-form" onsubmit="return validation()" name="myform">
                <div class="form-control ">
                    <label id="form-text"  for="fname">First Name :</label><br>
                    <input type="text" id="fname"class="form-content" placeholder="First Name" name="first_name" onblur="register_validate()">
                    <p class="wrong"></p>  
                
                </div>
            
                <div class="form-control">
                    <label id="form-text">Last Name :</label><br>
                    <input type="text"id="lname" class="form-content" placeholder="Last Name" name="last_name">
                    <p class="wrong"></p>  
                </div>
                
                <div class="form-control">
                    <label  id="form-text" for="username">Username :</label><br>
                    <input type="text"id="username" name="username" class="form-content"placeholder="Create Username"> 
                    <p class="wrong"></p> 
                    <span class="user-exist"> Username Already exist</span>
                   
                </div>
               <div class="form-control">
                    <label  id="form-text">User Password:</label>
                    <input type="password"id="pass" name="pass" class="form-content"placeholder="Password">
                    <p class="wrong"></p>  
               </div>
               <div class="form-control">
                    <label  id="form-text">Confirm Password:</label>
                    <input type="password"id="cpass" name="cpass" class="form-content"placeholder="Retype Password">
                    <p class="wrong"></p>  
               </div>
                
                <div class="form-control">
                    <label  id="form-text">City name:</label><br>
                    <input type="text"id="city_name" class="form-content" placeholder="City Name" name="city_name">
                    <p class="wrong"></p>  
                </div>
               <div class="form-control">
                    <label  id="form-text">Email :</label><br>
                    <input type="text"id="email"class="form-content" placeholder="Enter Your email" name="email"> 
                    <p class="wrong"></p>      
               </div>          
               <div class="form-control">
                    <label  id="form-radio" > 
                        <input type="radio" id="gender" name="gender" class="mycheck" value="male"> 
                        <span>Male</span>
                    </label>
                    <label id="form-radio"> 
                        <input type="radio" id="gender" name="gender"  class="mycheck" value="female"> 
                        <span >Female</span>
                    </label>
               
                    <label id="form-radio"> 
                        <input type="radio" id="gender" name="gender"  class="mycheck" value="othres"> 
                        <span >Othres</span>
                    </label>
                    
                </div>
                <input type="submit" name="save"  id="signup" value="submit">
                <a href="login.php" id="login-btn">If Already Account ? login</a>
            </form>
        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>