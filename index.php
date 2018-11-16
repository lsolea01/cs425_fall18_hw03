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
        $_SESSION['level']=1;
        $_SESSION['score']=0;





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











    if (isset($_POST['start'])|| $_SESSION['start']==1 ) {
        $random_number= rand(0, 24);
        // Read JSON file
        if ($_SESSION['level']==1) {
            $json = file_get_contents('level1.json');
        }
        elseif ($_SESSION['level'==2]){
            $json = file_get_contents('level2.json');
        }
        elseif ($_SESSION['level'==3]){
            $json = file_get_contents('level3.json');
        }
        //Decode JSON
        $json_data= json_decode($json,true);



        if($_SESSION['count']<4) {


            echo '<form method="post">';

            echo $json_data[$random_number]["question"];
            echo $_SESSION['count']+1;
            echo'/5<br>';
            echo '<input type="radio" name="radio"  value="1" > Male<br>';
            echo '<input type="radio" name="radio" value="2"> Female<br>';
            echo '<input type="radio" name="radio" value="3"> Other<br>';
            echo '<input type="radio" name="radio" value="4">allo<br>';
            echo '<input type="submit" name="next" value="NEXT">';
            echo '</form>';
        }
        else if ($_SESSION['count']==4){
            echo $json_data[$random_number]["question"];
            echo $_SESSION['count']+1;

            echo'/5<br>';
            echo '<form method="post">';
            echo '<input type="radio" name="radio"  value="1" > Male<br>';
            echo '<input type="radio" name="radio" value="2"> Female<br>';
            echo '<input type="radio" name="radio" value="3"> Other<br>';
            echo '<input type="radio" name="radio" value="4">allo<br>';
            echo '<input type="submit" name="finish" value="FINISH">';
            echo '</form>';
            unset($_POST);
        }


    if (isset($_POST['next'])||isset($_POST['finish'])) {
        if(isset($_POST['radio'])==$json_data[$random_number]["correct"]){
            $_SESSION['level']=$_SESSION['level']+1;
        $_SESSION['score']=$_SESSION['score']+$json_data[$random_number]["score"];
        echo $_SESSION['score'];
        }
    }

    }








    ?>





</div>



 </html>