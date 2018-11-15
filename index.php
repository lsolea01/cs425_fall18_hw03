<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Quiz</title>

    <?php include 'script.php';

    if (isset($_POST['start'])){
        $_SESSION['count']=0;
        $_SESSION['start']=1;
    }
    if (isset($_POST['next'])){
        $_SESSION['count']=$_SESSION['count']+1;
    }if (isset($_POST['stop_game'])){
        $_SESSION['start']=0;
        unset($_POST);
    }

    ?>






</head>


<div class="container-fluid">

    <!-- Second navbar for profile settings -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Questions Game</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-4">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home Page</a></li>
                    <li><a href="#">Help Page</a></li>
                    <li><a href="#">High Scores Page</a></li>

                    <li>
                        <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#navbar-header" aria-expanded="false" aria-controls="nav-collapse4">Profile <i class=""></i> </a>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div><!-- /.container-fluid -->



<div class="container">




   <form method="post" >
       <input type="submit" name="start" value="START">

        </form>
    <form method="post" >
       <input type="submit" name="stop_game" value="STOP GAME">

        </form>

    <?php


    // Read JSON file
    $json = file_get_contents('loukas.json');

    //Decode JSON
    $json_data = json_decode($json,true);

    //end read json file








    if (isset($_POST['start'])|| $_SESSION['start']==1 ) {
        if($_SESSION['count']<4) {


            echo '<form method="post">';
            echo 'erwtisi??';
            echo $_SESSION['count']+1;
            echo'/5<br>';
            echo '<input type="radio" name="optradio"  value="male" > Male<br>';
            echo '<input type="radio" name="optradio" value="female"> Female<br>';
            echo '<input type="radio" name="optradio" value="other"> Other<br>';
            echo '<input type="radio" name="optradio" value="other">allo<br>';
            echo '<input type="submit" name="next" value="NEXT">';
            echo '</form>';
        }
        else if ($_SESSION['count']==4){
            echo 'erwtisi??';
            echo $_SESSION['count']+1;
            echo'/5<br>';
            echo '<form method="post">';
            echo '<input type="radio" name="optradio"  value="male" > Male<br>';
            echo '<input type="radio" name="optradio" value="female"> Female<br>';
            echo '<input type="radio" name="optradio" value="other"> Other<br>';
            echo '<input type="radio" name="optradio" value="other">allo<br>';
            echo '<input type="submit" name="finish" value="FINISH">';
            echo '</form>';
            unset($_POST);
        }


    }









    ?>





</div>



 </html>