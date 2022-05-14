<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>SEARCH Hero</title>
    </head>
    <body>
        <?php
        echo " <center>";
        require 'dbconnection.php'; // connection between database and the php
        echo "</center>";
        ?>
        <div class="container mt-3">
            <h1>SEARCH MOVIES BY HERO NAME</h1> <!--heading of the pag-->
                <form action="searchhero.php" method="post">
                <div class="form-group">
                    <label for="Movie name"> ENTER HERO NAME</label> <!-- taking the input from the user -->
                    <input type="text" name="hero" class="form-control" id="hero">
                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center><br><br>
                </form>
            </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $hero = $_POST['hero']; //asigning the input to the php variable $hero
            if(!$connect)
            {
                die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else
            {
                $sql = "Select * from movie_db where hero like '$hero'"; // select all the records with the where the hero name is $hero(user input) 
                $result = mysqli_query($connect, $sql); // execute the query
                if($result) // check if there is any problem with the query if no enter the if condition
                {
                    $num = mysqli_num_rows($result);    //total number of records are known and assigned to $num
                    if($num)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {   //prient the data in specified manner
                            echo "<center>";                                
                            echo "<b>";
                            echo "MOVIE NAME :". $row['movie_name']."<br>"."DATE OF RELEASE : ". $row['release_date'] ."<br>" ."HERO : ". $row['hero'] ."<br>"."HEROINE : ".$row['heroine']."<br>"."DIRECTOR : ".$row['director'];
                            echo "<br>";
                            echo "</b>";
                            echo " </center>";
                            echo " <br><br>";
                        }
                    }
                    else
                    {
                        // print that there is no data in the database with respect to that hero
                        echo " <center>THERE IS NO HERO PRESENT IN THE DATABASE IN THE NAME OF : <b>".$hero."</b></center>";
                    }
                }
            }
        }
        ?>
    </body>
</html>