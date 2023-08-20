<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="card mt-4 mx-auto" style="max-width:15rem;">
        <div class="card-header bg-success text-white">
            <h3>Welcome to the Green Pages</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <select name="name" class="form-control">
                    <option value="" hidden> Select Name</option>
                    <option value="Mark">Mark</option>
                    <option value="Chris">Chris</option>
                    <option value="Marie">Marie</option>
                    <option value="Kenzo">Kenzo</option>
                    <option value="Troye">Troye</option>
                </select>
                <button type="submit" class="btn btn-success mt-3" name="submit">Submit</button>
            </form>
        </div>

    </div>
</body>
</html>

<?php

    $address = array(
        'Mark' => 'New York',
        'Chris' => 'London',
        'Marie' => 'Paris',
        'Kenzo' => 'Israel',
        'Troye' => 'Spain'
    );

    if(isset($_POST['submit'])){
        $selectedName = $_POST['name'];
        echo "<div class='card card-body bg-light mx-auto text-center' style='max-width:15rem;'>";
        if(array_key_exists($selectedName, $address)){
            echo "<h6 class='mb-0'>$selectedName lives in ";
            echo $address[$selectedName];
            echo "</h6>";
        }
        else{
            echo "Address not found";
        }
        echo "</div>";
    }

?>