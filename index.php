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
<!--    form -->

<!--    form-->
    <title>Quiz</title>


    <script>
        function enableButton() {
            document.getElementById("button_next").disabled = false;

        }
    </script>
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


<!--<div>-->
<!---->
<!---->
<!---->
<!---->
<?php

// Read JSON file
$json = file_get_contents('loukas.json');

//Decode JSON
$json_data = json_decode($json,true);
$a="b";
//Print data
//print_r($json_data[0]);

?>
<!---->
<!---->
<!---->
<!--</div>-->

<div class="container">
    <div>
        <button type="button" onclick="enableButton()">Start</button>
    </div>
    <p><?php print_r($json_data[0]['question']);?></p>
    <form  action="" method="POST">

           <input type="radio" name="optradio" value="1"  ><?php print_r($json_data[0]['answer1']);?>
             <br>


            <input type="radio" name="optradio" value="2"><?php print_r($json_data[0]['answer2']);?>
        <br>

             <input type="radio" name="optradio" value="3"><?php print_r($json_data[0]['answer3']);?>
        <br>
             <input type="radio" name="optradio" value="4"><?php print_r($json_data[0]['answer4']);?>
        <br>

            <button type="button" id="button_next" value="get value"disabled>Next</button>
        <?php


//        $radioVal = $_POST["optradio"];
        print_r($_POST["optradio"]);
        ?>

    </form>


</div>

 

 </html>