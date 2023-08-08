<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    .card{
        width:400px;
        margin:0 auto;
        margin-top:20px;
        text-align:center;
    }
</style>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


    <div class="container bg-light border border-gray text-center px-0">

        <h4 class="text-center py-2 border border-gray">Display Day Act-4</h4>

        <form action="" method="get">
            <div class="row justify-content-center"> <!-- .row で中央配置 -->
                <div class="col"> <!-- .col でセルを均等に配置 -->
                    <button class="btn btn-outline-none bg-primary text-light" type="submit" name="monday">Monday</button>
                </div>
                <div class="col">
                    <button class="btn btn-outline-none bg-secondary text-light" type="submit" name="tuesday">Tuesday</button>
                </div>
                <div class="col">
                    <button class="btn btn-outline-none bg-success text-light" type="submit" name="wednesday">Wednesday</button>
                </div>
                <div class="col">
                    <button class="btn btn-outline-none bg-danger text-light" type="submit" name="thursday">Thursday</button>
                </div>
                <div class="col">
                    <button class="btn btn-outline-none bg-warning text-light" type="submit" name="friday">Friday</button>
                </div>
                <div class="col">
                    <button class="btn btn-outline-none bg-dark text-light" type="submit" name="saturday">Saturday</button>
                </div>
                <div class="col">
                    <button class="btn btn-outline-none bg-info text-dark" type="submit" name="sunday">Sunday</button>
                </div>
            </div>
        </form>

    </div>
</body>
</html>

<?php

if(isset($_GET['monday'])){
    echo "<div class='card card-body bg-light text-dark'>Monday";
}

if(isset($_GET['tuesday'])){
    echo "<div class='card card-body bg-light text-dark'>Tuesday";
}

if(isset($_GET['wednesday'])){
    echo "<div class='card card-body bg-light text-dark'>Wednesday";
}
if(isset($_GET['thursday'])){
    echo "<div class='card card-body bg-light text-dark'>Thursday";
}
if(isset($_GET['friday'])){
    echo "<div class='card card-body bg-light text-dark'>Friday";
}
if(isset($_GET['saturday'])){
    echo "<div class='card card-body bg-light text-dark'>Saturday";
}
if(isset($_GET['sunday'])){
    echo "<div class='card card-body bg-light text-dark'>Sunday";
}



?>

