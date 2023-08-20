<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredo Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="text-dark text-center mx-auto" style="max-width: 15rem;">
        <div class="text-dark">
            <h4 class="my-1"> How many people are going to eat? </h4>
        </div>
        <div class="card-body mx-auto">
            <form action="" method="post">
                <div class="row my-1">
                    <div class="col">
                        <input type="number" class="form-control mt-2" id="numPeople" name="numPeople">
                    </div>
                </div>
                <input type="submit" value="SUBMIT" class="btn btn-success mt-2 form-control" name="submit">
            </form>
        </div>
    </div>

    <?php

function checkPrice($age){
    $rate = 325;

    if($age >= 0 && $age <= 5){
        return 0;
    }
    else if($age >= 6 && $age <= 10){
        return $rate - ($rate * 0.1);
    }
    else if($age >= 60){
        return $rate - ($rate * 0.05);
    }
    else{
        return $rate;
    }
}

$ages = array();

if(isset($_POST['submit'])){

    $numPeople = $_POST['numPeople'];

    echo "<div class='mx-auto mt-4' style='max-width:20rem;'>";
    echo "<h4 class='my-3 text-center'> Age of the people attending </h4>";
    echo "<form method='post' class='text-center'>";
    for($i = 0; $i < $numPeople; $i++){
        echo "<input type='number' class='form-control mx-auto my-1' name='ages[]' placeholder='Enter age here'>";
    }

    echo "<input type='submit' value='save' class='btn btn-primary mt-2 mb-4 form-control' name='save'>";
    echo "</form>";
    echo "</div>";
}

if(isset($_POST['save'])){
    $ages = $_POST['ages'];
    echo "<div class='mx-auto mt-4' style='max-width:20rem;'>";
    echo "Array (";
    foreach($ages as $key => $age){
        echo "[$key] => $age ";
    }
    echo ")";
    echo "</div>";


}

?>

<table class="table mx-auto mb-0 mt-3 table-bordered border-dark text-center" style="max-width:20rem;">
    <thead class="text-center">
        <tr>
            <th class="bg-dark text-white">AGE</th>
            <th class="bg-dark text-white">PRICE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $totalPrice = 0;
            foreach($ages as $key => $age){
                $price = checkPrice($age);
                $totalPrice += $price;
        ?>
        <tr>
            <td><?php echo $age; ?></td>
            <td><?php echo checkPrice($age); ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>


<div class="bg-danger text-white text-center mx-auto" style="max-width:20rem;">
    <div class="row">
        <div class="col">Total Price</div>
        <div class="col"><?php echo $totalPrice; ?></div>
    </div>
</div>

<div class="bg-primary text-white text-center mx-auto" style="max-width:20rem;">
    <div class="row">
        <div class="col">Number of People</div>
        <div class="col"><?php echo count($ages); ?></div>
    </div>
</div>


</body>
</html>

