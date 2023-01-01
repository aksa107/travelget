<!DOCTYPE html>
<html lang="en">
<head><?php
session_start();
$username=$_SESSION['logged'];
// echo $username;
include 'connect.php';
$query="select * from admin where aname='$username'";
$res=mysqli_query($link,$query);
if($row=mysqli_fetch_array($res))
{
    $username=$row['aname'];
    $email=$row['amail'];
    $phone=$row['aphone'];
    $password=$row['apassword'];
}

?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Profie</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/lstyle.css">
</head>
<body></body>
<?php include 'adminnavbar.php';?>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">admin profile</h2>
                        <form method="POST" class="register" action="adminupdateprocess.php" >
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="aname" id="name" value="<?php echo $username;?>">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="amail" id="email" value="<?php echo $email;?>">
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="aphone" id="pass" value="<?php echo $phone;?>">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="apassword" id="re_pass" value="<?php echo $password;?>">
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Edit profile"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="adminlogin.php" class="signup-image-link"></a>
                    </div>
                </div>
            </div>
        </section>       
    
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/lmain.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>