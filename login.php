<!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediStore</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
</head>
<body>
      <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4" id="logo" >
                    <a href="home.html" class="logo-text">
                        Medi<span style="color:#39BAF0; font-size:40px">STORE</span>
                    </a>		
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="home.html" style="float: left" class="logo-text">
                            Medi<span style="color:#39BAF0; font-size:40px">STORE</span>
                        </a>
                        </div><br>	

        <br> <div class="contentText">
                            <h1>Welcome, Please Sign In</h1>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--<div class="well">!-->
                                    <h2>New Customer</h2>
                                    <p>Are you a new customer.</p>
                                    <p>By creating an account at MEDISTORE you will be able to shop faster.</p>
                                    <a class="btn btn-primary reg_button" href="register.php">
                                        <i class="fa fa-caret-right"></i>&nbsp;
                                        Continue
                                    </a>
                                    <!--</div>!-->
                                </div>
                                <div style="border-left: 1px dashed #c1bebe" class="col-sm-6">
                                    <!--<div class="well">!-->
                                    <h2>Returning Customer</h2>
                                    <p>I am a returning customer</p>


                                    <p style="color:red;">
                                        <?php
                                        if(isset($_GET['error'])){
                                        $error=$_GET['error'];
                                        echo $error;
                                        }
                                        ?>
                                    </p>
                                    <!-- <form enctype="multipart/form-data"  role="form" class="form-horizontal add_margin"> -->
                                    <form action="login_php.php" method="post">
                                        <div class="form-group">
                                            <label for="input-email" class="control-label col-sm-4">E-Mail Address</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="input-email" placeholder="E-Mail Address" value="" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-password" class="control-label col-sm-4">Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">

                                            </div>

                                        </div>
                                        <p class="cat_name"> <a href="#">.</a></p>
                                        <!--<input type="submit" value="Login" class="btn btn-primary reg_button" />!-->
                                        <button class="btn btn-primary reg_button" value="Login" type="submit">
                                            <i class="fa fa-key"></i>&nbsp;
                                            Login                            
                                        </button>
                                        <br>
                                        <br><a class="btn btn-primary reg_button" href="shopownrs.php">
                                            <i class="fa fa-caret-right"></i>&nbsp;
                                            for shop owners
                                            </a>
                                    </form>
                                    <!--</div>!-->
            </div>
</body>
</html>