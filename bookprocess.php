<?php
session_start();
$username=$_GET['username'];
$place=$_GET['place'];
$rate=$_GET['rate'];



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/lstyle.css">
</head>
<body></body>

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Booking Confirmation</h2>
                        <form method="POST" class="register" action="bookprocess2.php" >
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" readonly="readonly" value="<?php echo $username;?>"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="place" id="place" value="<?php echo $place;?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="rate" id="rate" value="<?php echo $rate;?>" readonly="readonly"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="date" name="days" id="days" placeholder="days"/>
                            </div>
                          
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Make Booking"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.html" class="signup-image-link">I am already member</a>
                        <a href="adminlogin.html" class="signup-image-link">I am Admin</a>

                    </div>
                    
                </div>
            </div>
        </section>       
    
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/lmain.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
