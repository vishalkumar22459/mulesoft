<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CONNECTION</title>
</head>
<body>

<?php
$servername = 'localhost';  //as im usinf XAMPP -> phpMyadmin to create the database i'm using localhost
$username = 'root'; //user name is always root in phpmyadmin
$password = ''; //password will always be empty
$dbname = 'mulesoft';     //created the database with the name of mulesoft

$connect = mysqli_connect($servername , $username , $password , $dbname); //establishing the connection between database and localhost
if (!$connect){
    //if NOT connected prient the message on the screen
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
    echo " connection is successful";
}
?>
<br>
<center>
    <!-- show the operations that can be performed-->
<a class = "btn btn-outline-success" href = "datainsertion.php" role="button">RECORD INSERTION</a><br><br><!--record isertion operation-->
<a class = "btn btn-outline-success" href = "searchhero.php" role="button">SEARCH BY HERO</a><br><br><!--reterive the records by passing hero attribute as parameter-->
<a class = "btn btn-outline-success" href = "displayallmovie.php" role="button">DISPLAY ALL MOVIES IN DATABASE</a><br><br><!--retrive all the records that are stored in the database--> 
</center>
</body>
</html>