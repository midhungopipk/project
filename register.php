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
			</div>   
                     <div class="breadcrumbs">
                            <a href="login.html"><i class="fa fa-home"></i></a>
                            <a href="#">Register</a>
                        </div>
                        <h1>My Account Information</h1>
                        <p> <small><strong class="define_note"></strong></small>If you already have an account with us, please login at the 
                            <a href="login.html">login page</a>.</p>
                        <form class="form-horizontal" action="data2.php" method="POST">
                            <div class="contentText">  
                                <fieldset id="account">
                                    <h1>Your Personal Details</h1>
                                    <div style="display: none;" class="form-group required">
                                        <label class="col-sm-2 control-label">Customer Group</label>
                                        <div class="col-sm-10">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" checked="checked" value="1" name="customer_group_id">
                                                    Default</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="FirstName">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="" name="LastName">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="EMail">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="Telephone">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="address">
                                    <h1>Your Address</h1>
                                 
                                    <div class="form-group required">
                                        <label for="input-address-1" class="col-sm-2 control-label">Address 1</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="" name="Address1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-address-2" class="col-sm-2 control-label">Address 2</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-address-2" placeholder="Address 2" value="" name="Address2">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-city" class="col-sm-2 control-label">City</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-city" placeholder="City" value="" name="City">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-postcode" class="col-sm-2 control-label">Post Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="Postcode">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-country" class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="input-country" name="country_id">
                                                <option value="">Please Select</option>
                                                <option value="244">India</option>
                                                

                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-zone" class="col-sm-2 control-label">Region / State</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="input-zone" name="zone_id">
                                                <option value="">Please Select</option>
                                                <option value="3513">Kerala</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <h1>Your Password</h1>
                                    <div class="form-group required">
                                        <label for="input-password" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="Password">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-confirm" class="col-sm-2 control-label">Password Confirm</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" name="confirm">
                                        </div>
                                    </div>
                                </fieldset>
				 
                      
                                <div class="buttons">
                                    <div class="pull-middle">
                                        <input type="submit" class="btn btn-primary reg_button" value="Continue" >
                                    </div>
                                </div><br>
				                   
                                
                            </div>
                        </form>
        </div>                
 </body>
</html>