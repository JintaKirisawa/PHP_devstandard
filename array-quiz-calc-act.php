<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Average Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="card text-dark text-center bg-light mx-auto" style="max-width: 20rem;">
        <div class="card-header bg-dark text-white">
            <h6 class="my-1"> Quiz Average Calculator </h6>
        </div>
        <div class="card-body mx-auto">
            <form action="" method="post">
                <div class="row my-1">
                    <div class="col">
                        <input type="number" class="form-control mt-2" id="numQuiz" name="numQuiz" placeholder="Enter number of quizzes">
                    </div>
                </div>
                <input type="submit" value="Compute" class="btn btn-danger mt-2 form-control" name="submit">
            </form>
        </div>
    </div>

</body>
</html>

<?php

if(isset($_POST['submit'])){

    $numQuiz = $_POST['numQuiz'];

    echo "<div class='card card-body bg-success text-white mx-auto mt-4' style='max-width:20rem;'>";
    echo "<form method='post'>";
    for($i = 0; $i < $numQuiz; $i++){
        echo "<input type='number' class='form-control mx-auto my-1' name='quizzes[]'>";
    }

    echo "<input type='submit' class='btn btn-danger mt-2' name='save'>";
    echo "</form>";
    echo "</div>";
}

if(isset($_POST['save'])){
    $quizzes = $_POST['quizzes'];

    // Calculate the sum of quiz score
    $sum = array_sum($quizzes);

    // Calculate the average
    $average = $sum / count($quizzes);


    echo "<div class='card card-body bg-success text-white mx-auto mt-4' style='max-width:20rem;'>";
    echo "<h6> Average is: $average</h6>";
    echo "</div>";
}


?>