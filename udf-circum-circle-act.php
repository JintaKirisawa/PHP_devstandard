<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="card bg-light mx-auto mt-3" style="width:200px;">
        <div class="card-header">
            <h3 class="mb-0">Circumference of a Circle</h3>
        </div>
        <div class="card-body text-center">
            <form action="" method="post">
                <input type="number" name="radius" class="form-control" placeholder=" Radius">
                <br>
                <button class="btn btn-primary form-control" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>


<?php

$Ans = 1;

function Circumference($radius){
    $Ans = 2 * $radius * pi();
    echo "Circumference = ".round($Ans, 2);
}

if(isset($_POST['submit'])){
    $radius = $_POST['radius'];

    echo "<div class='card card-body mx-auto' style='width:200px;'>";
    Circumference($radius);
}

?>