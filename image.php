<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Packages</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/lstyle.css">
    <style>
        label{
            top: -24%!important;
        }
        .form-group{
            overflow: initial;
            margin-bottom:3rem !important;
        }
    </style>
</head>
<body></body>      <?php include 'adminnavbar.php';?>

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Add Packages Details</h2>
                        <form method="POST" class="register" action="imageproccess.php" enctype="multipart/form-data" >
                            <div class="form-group">
                            <label for="pname" class="text-muted"><i class="zmdi zmdi-lock-outline me-3"></i> Package Name</label>
                                <input type="text" name="pname" id="pname" placeholder=""/>
                            </div>
                            <div class="form-group">
                            <label for="pdes" class="text-muted"><i class="zmdi zmdi-lock-outline me-3"></i> Description</label>
                                <input type="text" name="pdes" id="pdes" placeholder=""/>
                            </div>
                            <div class="form-group">
                            <label for="ecnomy" class="text-muted"><i class="zmdi zmdi-lock-outline me-3"></i>ecnomy Price</label>
                                <input type="text" name="ecnomy" id="ecnomy" placeholder=""/>
                            </div>
                            <div class="form-group">
                            <label for="luxury" class="text-muted"><i class="zmdi zmdi-lock-outline me-3"></i>Luxury Price</label>
                                <input type="text" name="luxury" id="luxury" placeholder=""/>
                            </div>
                            <div class="form-group">
                            <label for="pdate" class="text-muted"><i class="zmdi zmdi-lock-outline me-3"></i> Details</label>
                                <input type="text" name="pdetails" id="pdate" placeholder=""/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass" class="text-muted"><i class="zmdi zmdi-lock-outline me-3"></i> Packages</label>
                                <input type="file" name="pdf" id="pdf" placeholder=""  accept=".pdf"/>
                            </div>
                            <div class="form-group ">
                              
                            <label for="re-pass" class="text-muted"><i class="zmdi zmdi-lock-outline me-3"></i> Image</label>
                                <input type="file" name="image" id="image" placeholder="Image"/>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Add"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <div>
                    <a href="uploadlist.php" class="signup-image-link">Edit Package</a>
                    </div>
                    </div>
                    
                </div>
            </div>
        </section>       
    
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/lmain.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
