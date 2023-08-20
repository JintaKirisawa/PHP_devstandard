<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Activity</title>
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
        <h3 class="bg-dark text-light p-3 rounded">Subtract if first number is greater than second number. Multiply if not!</h3>
        <form action="" method="get" class="bg-light">

            <input type="number" name="firstNumber" class="border border-gray rounded d-inline-flex mt-2" placeholder=" First Number">

            <input type="number" name="secondNumber" class="border border-gray rounded d-inline-flex mt-2" placeholder=" Second Number">

            <button class="submit btn btn-lg bg-danger text-light rounded d-inline-flex my-4" name="submit">Compute</button>
        </form>
    </div>

</body>
</html>

<?php

function calculate($num1, $num2){
    if($num1 > $num2){
        $Ans = $num1 - $num2;
        echo "<div class='card card-body bg-dark text-light text-center mt-3'>
        First Number: $num1<br>
        Second Number: $num2<br><br>
        The Difference is: $Ans";
    }
    else if($num2 > $num1){
        $Ans = $num1 * $num2;
        echo "<div class='card card-body bg-dark text-light text-center mt-3'>
        First Number: $num1<br>
        Second Number: $num2<br><br>
        The Product is: $Ans";
    }
}

if(isset($_GET['submit'])){
    $number1 = $_GET['firstNumber'];
    $number2 = $_GET['secondNumber'];
    calculate($number1, $number2);
}

?>