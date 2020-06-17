

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="container">
        <div id="login-form">
            <h2>Please login to visit next.!</h2>
            <form action="validation.php" method="post" id="regi-form" onsubmit="return logincheck()" name="loginform">
                <label  id="form-text">Username :</label><br>
                <input type="text" name="username" class="form-content"placeholder="Create Username"><br>
                <label  id="form-text">User Password:</label>
                <input type="password" name="pass" class="form-content"placeholder="Password"><br>
                <input type="submit" name="save"  id="login" value="Login">
            </form>
        </div>
    </div>



    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>