<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .card{
            width: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="card bg-light mx-auto mt-3" style="width:300px;">
        <!-- CARD HEADER -->
        <div class="card-header bg-dark text-white text-center"><h3 class="mb-0">Factorial Activity</h3></div>
        <!-- CARD BODY -->
        <div class="card-body text-center">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control" name="num1" placeholder=" Enter a Number">
                    </div>
                </div>
                <input type="submit" class="btn btn-danger mt-3" value="Check" name="submit">
            </form>
        </div>
    </div>

</body>
</html>

<!-- PHP -->
<?php

    function Factorial($num){
            $Ans = 1;
            for($i = $num; $i >= 1; $i--){
                $Ans = $Ans * $i;
            }
            return $Ans;
        }


    if(isset($_POST['submit'])){
        $num = $_POST['num1'];
        if($num == null){
            echo "<div class='card card-body bg-warning text-white text-center mt-4'>Please Enter Number!</div>";
        }
        else{
            echo "<div class='card card-body bg-success text-white text-center mt-4'>";
            echo Factorial($num);
            echo "</div>";
        }
    }

?>