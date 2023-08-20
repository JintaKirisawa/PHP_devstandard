<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ends With</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .card{
            width:400px;
            margin:0 auto;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="container bg-light border border-gray" style="width:400px;">
        <h3 class="bg-dark text-center text-light">Ends With</h3>

        <form action="" method="POST">
            <input type="number" name="num">

            <input type="submit" class="btn btn-danger" name="submit" value="submit">
        </form>
    </div>
</body>
</html>

<?php

function compute($num_x){
    for($num = 1; $num <= $num_x; $num++){
        echo "<div class='card bg-dark text-light'>$num";
    }
}

if(isset($_POST['submit'])){
    $num1 = $_POST['num'];
    compute($num1);
}

?>