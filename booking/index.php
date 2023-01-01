<?php
session_start();
$username=$_GET['username'];
$package=$_GET['package'];

$date = date('Y-m-d');
echo $date;
include '../connect.php';

$query="select pid from packages where pname='$package' ";
$res=mysqli_query($link,$query);

$row=mysqli_fetch_row($res);

$id=$row[0]

   
   
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
 
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/travel-concept-with-baggage.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST"  action="../bookprocess2.php" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <input type="hidden" name="pid" value="<?php echo $id;?>">
                                    <label for="package" class="required">Package name</label>
                                    <input type="text" name="package" readonly id="package" value="<?php echo $package?>" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                           
                                <div class="form-input">
                                    <label for="address" class="required">address</label>
                                    <textarea class="form-control " name="address" id="address" cols="10" rows="5"></textarea>
                                    
                                </div>
                               
                                <div class="form-input">
                                    <label for="date" class="required">date</label>
<input type="date" required name="date" id="date" min="<?php echo $date ?>">                                    
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">
                                            Mode
                                        </label>
                                        <!-- <a href="#" class="form-link">Payment Detail</a> -->
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="radio" id="ecnomy" value="ecnomy" checked>
                                            <label for="ecnomy">ecnomy</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="radio" id="luxury" value="luxury">
                                            <label for="luxury">luxury</label>
                                            <span class="check"></span>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="form-input">
                                    <label for="chequeno">Name.</label>
                                    <input type="text" name="Name" id="Name" readonly value="<?php echo $username ?>" />
                                </div>
                             
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Number of passengers</label>
                                    <div class="d-flex">
                                        <label for="men" class="fw-normal">men</label>

                                        <input type="number" name="men" id="men" value="0"  min="0" max="100">
                                    </div>
                                    <div class="d-flex">
                                        <label for="men" class="fw-normal mt-3">women</label>

                                        <input type="number" class="mt-3" name="women" value="0"  id="women"  min="0" max="100">
                                    </div>
                                </div>
                         
                                <div class="form-input">
                                    <label for="additional" >additional</label>
                                    <textarea class="form-control " name="additional" id="additional" cols="10" rows="5"></textarea>
                                    
                                </div>
                       
                        
                            </div>
                        </div>
                  
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <!-- <input type="submit" value="Reset" class="submit" id="reset" name="reset" /> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>