<?php
session_start();


$con = mysqli_connect('localhost','root');
if($con)
{
}
else
{
    echo "connection failed";
}

mysqli_select_db($con,'project_details');


$name  = $_POST['name'];
$email = $_POST['email'];
$mobile  = $_POST['mobile'];
$service  = $_POST['service'];
$low_budget  = $_POST['low-budget'];
$high_budget  = $_POST['high-budget'];
$description  = $_POST['description'];

$query= "insert into details (name,email,mobile,service_type,low_budget,high_budget,description)
 values ('$name','$email','$mobile','$service','$low_budget','$high_budget','$description')";

 $q=mysqli_query($con,$query);

 if($q){
    include('after.php');
 }
 else{
     echo "error";
 }

?>

