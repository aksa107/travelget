<?php
session_start();
$username=$_SESSION['logged'];
include 'connect.php';
$query="select * from signup where name='$username'";
$res=mysqli_query($link,$query);
if($row=mysqli_fetch_array($res))
{
    $username=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $password=$row['password'];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My profile</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/lstyle.css">
</head>
<body><?php include 'usernavbar.php';?></body>

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">My profile</h2>
                        <form method="POST" class="register" action="updateprocess.php" >
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" value="<?php echo $username;?>" pattern="[A-Za-z]{3,}" required>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" id="email" value="<?php echo $email;?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="phone" id="pass" value="<?php echo $phone;?>" pattern="[789][0-9]{9}" required>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="password" id="re_pass" value="<?php echo $password;?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Edit profile"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.html" class="signup-image-link"></a>
                    </div>
                </div>
            </div>
        </section>       
    
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/lmain.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>