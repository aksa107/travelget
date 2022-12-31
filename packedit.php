<!DOCTYPE html>
<html lang="en">
<head><?php
session_start();
$username=$_SESSION['logged'];
include 'connect.php';
$id=$_GET['id'];
$name=$_GET['name'];
$query="select * from packages where pid='$id' && pname='$name'";
$res=mysqli_query($link,$query);
if($row=mysqli_fetch_array($res))
{
    $id=$row['pid'];
    $name=$row['pname'];
    $des=$row['pdes'];
    $rate=$row['prate'];
    $image=$row['image'];
    $path="uploads/".$image;
}
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package Edit</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/lstyle.css">
</head>
<body></body>
<?php ?>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Package Edit</h2>
                        <form method="POST" class="register" action="packeditprocess.php"  enctype="multipart/form-data">
                            <div class="form-group">
                            <input type="hidden" name="id" id="name"value="<?php echo$id;?>" >
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="pname" id="pname" value="<?php echo $name;?>">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="description" id="description" value="<?php echo $des;?>">
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="rate" id="rate" value="<?php echo $rate;?>">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="file" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="file" name="pdf" id="pdf">
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Edit package"/>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>       
    
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/lmain.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>