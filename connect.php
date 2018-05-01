<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'smartwb');

if(mysqli_connect_errno())
{
    echo "Database connection has failed with the following errors: ".mysqli_connect_error();
    die();
}

if(!mysqli_select_db($conn, 'smartwb'))
{
    die("Uh oh couldnt select database --> smartwb" .$conn->connect_error. ">");
}


?>