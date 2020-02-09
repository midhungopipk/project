<?php

if(isset($_POST["src"]))
{
 $valueToSearch = $_POST["src"];
 
 $query = "SELECT * FROM `medicines` WHERE CONCAT (`MedicineID`, `MedicineName`, `Cost`, `Quantity`, `shopname`)LIKE'%".$valueToSearch."%'";
 $search_result = filterTable($query);
}
else{
    $query = "SELECT * FROM `medicines`";
    $search_result = filterTable($query);
}
 function filterTable($query)
 {
     $connect=mysqli_connect("localhost","root","","medstore");
     $filter_Result=mysqli_query($connect,$query);
     return $filter_Result;

 }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>Medistore</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/owl-carousel.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <style>
            table,tr,th,td
            {border: 1px solid black;}
        </style>
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
                        
                    </nav>
                </div>
                
            </div>
        </div> 
        <div class="container-fluid bg-color">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <nav  role="navigation" class="navbar navbar-inverse" id="nav_show">
                                <div id="nav">
                                    <div class="navbar-header">
                                       
                                    </div>
                                    
                                </div>
                            </nav>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row" id="search_manu" style="margin-top: 10px">
                <div class="col-md-6 col-xs-12">
                    <form  name="quick_find" action="home.php" method="post">
                        <div class="form-group">
                            <div class="input-group">
                            <input type="text" name="src" placeholder="Enter the medicine" class="form-control input-lg" id="inputGroup"/>
                                
                                <div class="buttons">
                                    <div class="pull-middle">
                                        <input type="submit" name="Search" class="btn btn-primary reg_button" value="Search" >
                                    </div>
                                   <br>
                                </div>
                        </div>
                            <table>
                                        <tr>
                                            <th>MedicineID<th>
                                            <th>MedicineName<th>
                                            <th>Cost<th>
                                            <th>Quantity<th>
                                            <th>shopname<th>
                                        </tr>
                                        <?php while($row = mysqli_fetch_array($search_result)) :  ?>
                                        <tr>
                                            <td><?php echo $row['MedicineID'];?><td>
                                            <td><?php echo $row['MedicineName'];?><td>
                                            <td><?php echo $row['Cost'];?><td>
                                            <td><?php echo $row['Quantity'];?><td>
                                            <td><?php echo $row['shopname'];?><td>
                                         </tr>
                                        <?php endwhile;?>

                            </table>

                        </div>
                    </form>
                </div>
                
            </div>
        </div>

       

        

        </div>
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </body>
</html> 