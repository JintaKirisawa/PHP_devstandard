<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .card {
            width:350px;
            margin:0 auto;
        }

        input {
            width:300px;
            height:50px;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


    <div class="container p-0 text-center border border-gray rounded mt-2" style="width:350px;">
        <h3 class="bg-dark text-light p-3 rounded">Grade Descriptor</h3>
        <form action="" method="post" class="bg-light">

            <input type="number" name="Number" class="border border-gray rounded d-inline-flex mt-2" placeholder="Enter Grade!">

            <button class="submit btn btn-lg bg-danger text-light rounded d-inline-flex my-4" name="submit">Check</button>
        </form>
    </div>

</body>
</html>

<?php

function compute($num1){
    if($num1 >= 90 && $num1 <= 100){
        echo "<div class='card card-body bg-success text-light text-center mt-3'>
        Grade: $num1<br>
        Excellent";
    }
    else if($num1 >= 85 && $num1 <= 89){
        echo "<div class='card card-body bg-primary text-light text-center mt-3'>
        Grade: $num1<br>
        Good";
    }
    else if($num1 >= 80 && $num1 <= 84){
        echo "<div class='card card-body bg-warning text-light text-center mt-3'>
        Grade: $num1<br>
        Fair";
    }
    else if($num1 >= 75 && $num1 <= 79){
        echo "<div class='card card-body bg-danger text-light text-center mt-3'>
        Grade: $num1<br>
        Poor";
    }
    else if($num1 >= 60 && $num1 <= 74){
        echo "<div class='card card-body bg-dark text-light text-center mt-3'>
        Grade: $num1<br>
        Fail";
    }
    else{
        echo "<div class='card card-body bg-secondary text-light text-center mt-3'>
        Invalid";
    }
}

if(isset($_POST['submit'])){
    $number1 = $_POST['Number'];
    compute($number1);
}

?>