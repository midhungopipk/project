<html>
<?php
$MedicineID=$_POST['MedicineID'];
$MedicineName=$_POST['MedicineName'];
$Cost=$_POST['Cost'];
$Quantity=$_POST['Quantity'];
$shopname=$_POST['shopname'];



$servername="localhost";
$username="root";
$password="";
$dbname="medstore";
//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}
echo "connection successfully";
echo "$MedicineID $MedicineName $Cost $Quantity $shopname ";
$sql = "INSERT INTO medicines (MedicineID,MedicineName,Cost,Quantity,shopname)
VALUES ('$MedicineID','$MedicineName','$Cost','$Quantity','$shopname')";

if ($conn->query($sql) === TRUE )  {
    echo "New record created successfully";
}  else  {
    echo "Error: ". $sql . "<br>" .$conn->error;
}

$conn->close();
?>
<div class="buttons">
<a class="btn btn-primary reg_button" href="shopdtls.php">
                                        <i class="fa fa-caret-right"></i>&nbsp;
                                        Goback
                                    </a>
</div>
</html>