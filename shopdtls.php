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
                            <a href="#">MEDIC DETAILS</a>
                        </div>
                        <h1>My Stock Information</h1>
                        <p> <small><strong class="define_note"></strong></small> 
                            <a href="login.html"></a>.</p>
                        <form class="form-horizontal" action="medicines.php" method="POST">
                            <div class="contentText">  
                                <fieldset id="account">
                                    <h1>Your Stock Details</h1>
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
                                        <label for="input-MedicineID" class="col-sm-2 control-label">MedicineID</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-MedicineID" placeholder="MedicineID" value="" name="MedicineID">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-MedicineName" class="col-sm-2 control-label">MedicineName</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-MedicineName" placeholder="MedicineName" value="" name="MedicineName">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-Cost" class="col-sm-2 control-label">Cost</label>
                                        <div class="col-sm-10">
                                            <input type="Cost" class="form-control" id="input-Cost" placeholder="Cost" value="" name="Cost">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-Quantity" class="col-sm-2 control-label">Quantity</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="input-Quantity" placeholder="Quantity" value="" name="Quantity">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-shopname" class="col-sm-2 control-label">ShopName</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="input-shopname" placeholder="ShopName" value="" name="shopname">
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