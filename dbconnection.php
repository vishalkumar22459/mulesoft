<?php
$servername = 'localhost';  //as im usinf XAMPP -> phpMyadmin to create the database i'm using localhost
$username = 'root'; //user name is always root in phpmyadmin
$password = ''; //password will always be empty
$dbname = 'mulesoft';     //the data base is created

$connect = mysqli_connect($servername , $username , $password , $dbname); //establishing the connection between database and localhost
if (!$connect){
    //if NOT connected prient the message on the screen
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
    //echo " connection is successful";
}
?>