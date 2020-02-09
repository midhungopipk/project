<html>
<?php
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$EMail=$_POST['EMail'];
$Telephone=$_POST['Telephone'];
$Shopname=$_POST['Shopname'];
$Address1=$_POST['Address1'];
$Address2=$_POST['Address2'];
$City=$_POST['City'];
$Postcode=$_POST['Postcode'];
$Password=$_POST['Password'];


$servername="localhost";
$username="root";
$password="";
$dbname="shop details";
//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}
echo "connection successfully";
echo "$FirstName $LastName $EMail $Telephone $Shopname $Address1 $Address2 $City $Postcode $Password";
$sql = "INSERT INTO shopdetails (FirstName,LastName,EMail,Telephone,Shopname,Address1,Address2,City,PostCode,Password)
VALUES ('$FirstName','$LastName','$EMail','$Telephone','$Shopname','$Address1','$Address2','$City','$Postcode','$Password')";

if ($conn->query($sql) === TRUE )  {
    echo "New record created successfully";
}  else  {
    echo "Error: ". $sql . "<br>" .$conn->error;
}

$conn->close();
?>
<div class="buttons">
<a class="btn btn-primary reg_button" href="shopregistration.php">
                                        <i class="fa fa-caret-right"></i>&nbsp;
                                        Goback
                                    </a>
</div>
</html>
