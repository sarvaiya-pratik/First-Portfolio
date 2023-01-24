<?php

$server = "localhost";
$username = "root";
$password = "";

$con =  mysqli_connect($server, $username, $password);
if(!$con)
{
    die("connection to this database failed due to".mysqli_connect_error());

}
// echo "Succesfully connected";

$myname = $_GET['myname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$mymessage = $_GET['mymessage'];


$sql = "INSERT INTO 
 `portfolio`.`myform` ( `name`, `email`, `phone`, `msg`, `mydt`)
  VALUES ( '$myname', '$email', '$phone', '$mymessage', current_timestamp());";

echo $sql;

if($con->query($sql) == true)
{
    echo "succesfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
?>