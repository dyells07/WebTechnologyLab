<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labtest";

//connect to database
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection successful";
}
else 
{
    echo "Connection failed";
}

?>