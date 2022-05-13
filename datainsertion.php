<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>MOVIE INSERTION</title>
  </head>
  <body>
<?php
require 'dbconnection.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mi = $_POST['movieid'];
        $mt = $_POST['movietitle'];
        $rd = $_POST['releasedate'];
        $hero = $_POST['hero'];
        $heroine = $_POST['heroine'];
        $director = $_POST['director'];
      if (!$connect){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        $sql = "INSERT INTO `movie_db` (`movieid`, `movie_name`, `release_date`, `hero`, `heroine`, `director`) VALUES ('$mi', '$mt', '$rd', '$hero', '$heroine', '$director');";
        $result1 = mysqli_query($connect, $sql);
 
        if($result1)
        {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your entry has been submitted successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                    </button>
                    </div>';
        }
        else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                    </button>
                    </div>';
            }
      }
    }
?>

<div class="container mt-3">
<h1>MOVIE TABLE INSERTION</h1>
    <form action="datainsertion.php" method="post">
    
    <div class="form-group">
        <label for="Movie ID"> ID</label>
        <input type="text" name="movieid" class="form-control" id="movieid">
    </div>

    <div class="form-group">
        <label for="Movie Title">Movie Title</label>
        <input type="text" name="movietitle" class="form-control" id="movietitle"> 
    </div>

    <div class="form-group">
        <label for="release date">Release date</label>
        <input type="date" name="releasedate" class="form-control" id="releasedate"> 
    </div>

    <div class="form-group">
        <label for="hero">Hero</label>
        <input type="text" name="hero" class="form-control" id="hero"> 
    </div>
    
    <div class="form-group">
        <label for="heroine">Heroine</label>
        <input type="text" name="heroine" class="form-control" id="heroine"> 
    </div>

    <div class="form-group">
        <label for="director">Director</label>
        <input type="text" name="director" class="form-control" id="director"> 
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</html>


