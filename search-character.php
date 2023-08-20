<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Character</title>
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
        <h3 class="bg-dark text-light p-3 rounded-top">Search Character</h3>
        <form action="" method="post" class="bg-light">

            <input type="text" name="text" class="border border-gray rounded d-inline-flex mt-2" placeholder=" Enter Word!">

            <button class="submit btn btn-lg bg-danger text-light rounded d-inline-flex my-4" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>

<?php

$count = 0;
$vowels = 'aiueoAIUEO';

function searchWord($letter, $vowels, $count){


    for($i = 0; $i < strlen($letter); $i++){
        if(strpos($vowels, $letter[$i]) !== false){
            $count++;
        }
    }
    if(is_numeric($letter)){
        echo "<div class='card card-body bg-danger text-light text-center mt-3'>
        Number: $letter<br>
        <h5>You entered a Number!</h5>
        </div>";
    }
    else{
        echo "<div class='card card-body bg-success text-light text-center mt-3'>
        WORD: $letter<br>
        Total of Vowels: $count
        </div>";
    }

}

if(isset($_POST['submit'])){
    $letter = $_POST['text'];
    searchWord($letter, $vowels, $count);
}

?>