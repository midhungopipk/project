<?php
$servername="localhost";
$dbusername="root";
$pass="";
$dbname="shop details";
$conn=new mysqli($servername,$dbusername,$pass,$dbname);

if($conn->connect_error){
    echo $conn->connect_error;
}
else{
    echo "connected";
}

$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM `customerdtls` WHERE `EMail`='$email'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
echo $row['Password'];
echo $password;

if($row['Password']==$password){
    header('location:home.php?');
}
else{
    header("location:login.php?error=incorrect login credentials");
}





?>