<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foo Bar Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .card {
            width: 350px;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="card bg-light mt-3 mx-auto" style="width:350px;">
        <!-- CARD HEADER -->
        <div class="card-header bg-dark text-white text-center">
            <h2 class="mb-0">Foo Bar</h2>
        </div>
        <!-- CARD BODY -->
        <div class="card-body text-center">
            <form action="" method="post">
                <input type="number" class="form-control" name="num1" placeholder="Start Number!">
                <br>
                <input type="number" class="form-control" name="num2" placeholder="End Number!">
                <br>
                <button class="btn btn-danger" name="submit">Check</button>
            </form>
        </div>
    </div>
</body>
</html>

<!-- PHP -->
<?php

    function CheckFOOBAR($num1, $num2){
        for($i = $num1; $i <= $num2; $i++){
            if($i % 3 == 0 && $i % 5 != 0){
                echo ' FOO'.'<br>';
            }
            else if($i % 5 == 0 && $i % 3 != 0){
                echo ' BAR'.'<br>';
            }
            else if($i % 3 == 0 && $i % 5 == 0){
                echo ' FOOBAR'.'<br>';
            }
            else if($i % 5 != 0 && $i % 3 != 0){
                echo $i.'<br>';
            }
        }
    }


    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if($num1 == null || $num2 == null){
            echo "<div class='card card-body text-center text-white bg-warning mx-auto mt-4'>Please Enter Number!</div>";
        }
        else{
            echo "<div class='card card-body text-left text-white bg-success mx-auto mt-4'>";
            CheckFOOBAR($num1, $num2);
            echo "</div>";
            }
        }


?>