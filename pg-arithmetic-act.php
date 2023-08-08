<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUM Acti</title>
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



    <div class="container bg-light border border-gray rounded" style="width:500px; padding:0; margin-top:10px;">
        <form action="" method="get" class="form" style="width:100%;">
            <table>

                <h5 class="text-center py-2 border border-gray" style="">If Else Display Data Act-1</h5>

                <tbody style="margin-left:50px;">
                    <tr class="text-center">
                        <td style="padding:10px;">
                            <label for="firstnumber">Enter First Number:</label>
                        </td>
                        <td style="padding:10px;">
                            <input type="number" name="firstnumber" id="firstnumber" placeholder="First Number">
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td style="padding:10px;">
                            <label for="secondnumber">Enter Second Number:</label>
                        </td>
                        <td style="padding:10px;">
                            <input type="number" name="secondnumber" id="secondnumber" placeholder="Second Number">
                        </td>
                    </tr>
                </tbody>

            </table>

            <button class="btn btn-outline-none bg-primary text-light" type="submit" style="margin:10px 0 20px; margin-left:200px;">Compute</button>

        </form>
    </div>


</body>
</html>

<?php

if(isset($_GET['firstnumber']) && isset($_GET['secondnumber'])){
    $firstnumber = $_GET['firstnumber'];
    $secondnumber = $_GET['secondnumber'];

    $totalNumber = $firstnumber + $secondnumber;
    $differenceNumber = $firstnumber - $secondnumber;
    $productNumber = $firstnumber * $secondnumber;
    $quotientNumber = $firstnumber / $secondnumber;

    echo "<div class='card card-body bg-dark text-light'>
    The sum is: $totalNumber<br>
    The difference is: $differenceNumber<br>
    The product is: $productNumber<br>
    The quotient is: $quotientNumber
    ";
}


?>