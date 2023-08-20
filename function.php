<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <input type="submit" name="submit">
    </form>
</body>
</html>


<?php

// // writeMsg
// function writeMsg() {

//     echo "Hello World!";

// }

// writeMsg(); //call function


if(isset($_POST['submit'])){
//input process
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
}
// process
    $sum = calculateSum($num1,$num2);

    displaySum($sum);
?>