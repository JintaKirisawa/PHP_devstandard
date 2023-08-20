<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Col Row Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="card bg-light mx-auto mt-3" style="width:300px;">
        <div class="card-header bg-dark text-center text-white">
            <h3 class="mb-0">Col Row</h3>
        </div>
        <div class="card-body text-center">
            <form action="" method="post">
                <input type="number" name="row" class="form-control" placeholder=" Row">
                <br>
                <input type="number" name="columns" class="form-control" placeholder=" Columns">
                <br>
                <button class="btn btn-danger" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php

function RowCol($row, $col){
    echo "<table style='border-collapse:collapse;'>";
    for($i = 1; $i <= $row; $i++){
        echo "<tr>";
        for($j = 1; $j <= $col; $j++){
            echo "<td style='border:1px solid white;'>";
            echo " *";
        }
        echo "</tr>";
    }
}

if(isset($_POST['submit'])){
    $row = $_POST['row'];
    $col = $_POST['columns'];

    echo "<div class='card card-body bg-success text-warning mt-3 mx-auto text-center' style='width:500px;'>";
    RowCol($row, $col);
}

?>