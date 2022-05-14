<!DOCTYPE html>
<html>
    <head>
        <!--use bootstrap for better and user friendly interface-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>SEARCH Hero</title>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
        <?php
        require 'dbconnection.php'; //seting up the connection
                $sql = "Select * from movie_db"; //sql query
                $result = mysqli_query($connect, $sql); //performing sql query
                if($result)
                {
                    $num = mysqli_num_rows($result);    //total number of records is assigned to $num php variable
                    if($num)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            //print the data in the database
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
                        //if no record found print no data found message
                        echo " MOVIE DATABASE IS EMPTY <br> CLICK ON INSERT RECORDS TO ADD MOVIES TO THE DATA BASE ";
                    }
                }
        ?>
    </body>
</html>