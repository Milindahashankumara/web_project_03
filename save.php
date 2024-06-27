<?php

$path=mysqli_connect("localhost","root","","person_information");


$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$sql="insert into details values('$name','$email','$password')";

if(mysqli_query($path,$sql))
{
    echo("Data Saved Completed");
}

$command="update details set Email='$email' where  Name='$name'";

if(mysqli_query($path,$command))
{
    echo("<br>Data Updated");
}

?>