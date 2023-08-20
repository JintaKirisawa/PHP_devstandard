<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consonant or Vowel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="card bg-light mx-auto mt-3" style="max-width:20rem;">
        <div class="card-header bg-dark text-white text-center">
            <h3 class="mb-0">Consonant or Vowel</h3>
        </div>
        <div class="card-body text-center">
            <form action="" method="post">
                <input type="text" name="text" class="form-control" placeholder=" Please write a letter">

                <input type="submit" name="submit" value="Check" class="btn btn-danger mt-3">
            </form>
        </div>
    </div>

        <!-- Old code -->
        <!--
            <div class="container p-0 text-center border border-gray rounded mt-2" style="width:350px;">
                <h3 class="bg-dark text-light p-3 rounded">Consonant or Vowel</h3>
                <form action="" method="post" class="bg-light">

                    <input type="text" name="text" class="border border-gray rounded d-inline-flex mt-2" placeholder="Please write letter">

                    <button class="submit btn btn-lg bg-danger text-light rounded d-inline-flex my-4" name="submit">Check</button>
                </form>
            </div> -->

</body>
</html>

<?php

function checkLetter($letter){
    if($letter  == "a" || $letter  == "i" || $letter  == "u" || $letter  == "e" || $letter  == "o"){
        echo "<div class='card card-body bg-success text-light text-center mt-3 mx-auto' style='max-width:20rem;'>
        Letter: $letter<br>
        <h5>Vowel</h5>
        </div>";
    }
    else if(is_numeric($letter)){
        echo "<div class='card card-body bg-danger text-light text-center mt-3 mx-auto' style='max-width:20rem;'>
        Number: $letter<br>
        <h5>You entered a Number!</h5>
        </div>";
    }
    else if(strlen($letter) > 1){
        echo "<div class='card card-body bg-danger text-light text-center mt-3 mx-auto' style='max-width:20rem;'>
        Characters: $letter<br>
        <h5>Please Enter One Letter Only!</h5>
        </div>";
    }
    else{
        echo "<div class='card card-body bg-success text-light text-center mt-3 mx-auto' style='max-width:20rem;'>
        Letter: $letter<br>
        <h5>Consonant</h5>
        </div>";
    }

}

if(isset($_POST['submit'])){
    $letter = $_POST['text'];
    checkLetter($letter);
}

?>