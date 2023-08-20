<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="card text-dark text-center bg-light mx-auto" style="max-width: 20rem;">
        <div class="card-header bg-dark text-white">
            <h6 class="my-1"> Countries Visited? </h6>
        </div>
        <div class="card-body mx-auto">
            <form action="" method="post">
                <div class="row m-auto my-1">
                    <div class="col">
                        <label for="numCountry"> Number of Countries Visited? </label>
                        <input type="number" class="form-control mt-2" id="numCountry" name="numCountry">
                    </div>
                </div>
                <input type="submit" value="submit" class="btn btn-danger mt-2" name="submit">
            </form>
        </div>
    </div>

</body>
</html>

<?php

if(isset($_POST['numCountry'])){

    $numCountry = $_POST['numCountry'];
    $count = 0;

    echo "<div class='card card-body bg-success text-white mx-auto mt-4' style='max-width:20rem;'>";
    echo "<form method='post'>";
    for($count = 0; $count < $numCountry; $count++){
        echo "<input type='text' class='form-control mx-auto my-1' name='countries[]'>";
    }

    echo "<input type='submit' value='save' class='btn btn-danger mt-2' name='save'>";
}

if(isset($_POST['save'])){
    $countries = $_POST['countries'];
    echo "<div class='card card-body bg-success text-white mx-auto mt-4' style='max-width:20rem;'>";
    echo "<h6> You have been to: </h6> <br>";
    foreach($countries as $country){
        echo $country . "<br>";
    }
}

?>