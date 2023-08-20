<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .card {
            width:350px;
            margin:0 auto;
        }

        input {
            width:150px;
            height:40px;
        }

        .btn {
            width:100%;;
            text-align:center;
        }
        .col-6{
            padding:0;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


    <div class="container rounded mt-2 bg-danger text-light rounded" style="width:350px;">
        <!-- Title -->
        <div class="row">
            <h3 class="bg-dark py-3 text-center rounded-top">SALES</h3>
        </div>
        <form action="" method="post" class="mx-3">

    <!-- T-shirts -->
            <div class="row">
                <div class="col-6">
                    <label for="price1">T-shirts Price</label>
                    <input type="number" step="0.01" name="Price1" class="border border-gray rounded d-inline-flex mt-2" id="price1">
                </div>
                <div class="col-6">
                    <label for="quantity1">T-shirts Quantity</label>
                    <input type="number" name="Quantity1" class="border border-gray rounded d-inline-flex mt-2" id="quantity1">
                </div>
            </div>
    <!-- Shoes -->
            <div class="row">
                <div class="col-6">
                    <label for="price2">Shoes Price</label>
                    <input type="number" step="0.01" name="Price2" class="border border-gray rounded d-inline-flex mt-2" id="price2">
                </div>
                <div class="col-6">
                    <label for="quantity2">Shoes Quantity</label>
                    <input type="number" name="Quantity2" class="border border-gray rounded d-inline-flex mt-2" id="quantity2">
                </div>
            </div>

            <button class="submit btn text-warning text-center border border-warning rounded d-inline-flex my-4" name="submit">Compute</button>

    <!-- Output -->
            <div class="row border border-white">
                <div class="col-3 bg-secondary text-warning fw-bold">ITEM</div>
                <div class="col-3 bg-secondary text-warning fw-bold">PRICE</div>
                <div class="col-3 bg-secondary text-warning fw-bold">QUANTITY</div>
                <div class="col-3 bg-secondary text-warning fw-bold">TOTAL</div>
            </div>
    <!-- T-SHIRT -->
            <div class="row border border-white">
                <div class="col-3 bg-secondary text-white">T-shirt</div>
                <div class="col-3 bg-secondary text-white">
                    <?php
                        if(isset($_POST['submit'])){
                            $t_price = $_POST['Price1'];
                            echo $t_price;
                        }
                    ?>
                </div>
                <div class="col-3 bg-secondary text-white">
                    <?php
                        if(isset($_POST['submit'])){
                            $t_quantity = $_POST['Quantity1'];
                            echo $t_quantity;
                        }
                    ?>
                </div>
                <div class="col-3 bg-secondary text-white">
                    <?php
                        function compute_1($num1, $num2){
                            $total = $num1 * $num2;
                            echo "$total";
                        }

                        if(isset($_POST['submit'])){
                            $t_price = $_POST['Price1'];
                            $t_quantity = $_POST['Quantity1'];

                            compute_1($t_price, $t_quantity);
                        }
                    ?>
                </div>
            </div>
    <!-- SHOES -->
            <div class="row border border-white">
                <div class="col-3 bg-secondary text-white">Shoes</div>
                <div class="col-3 bg-secondary text-white">
                    <?php
                        if(isset($_POST['submit'])){
                            $s_price = $_POST['Price2'];
                            echo $s_price;
                        }
                    ?>
                </div>
                <div class="col-3 bg-secondary text-white">
                    <?php
                        if(isset($_POST['submit'])){
                            $s_quantity = $_POST['Quantity2'];
                            echo $s_quantity;
                        }
                    ?>
                </div>
                <div class="col-3 bg-secondary text-white">
                    <?php
                        function compute_2($num1, $num2){
                            $total = $num1 * $num2;
                            echo "$total";
                        }

                        if(isset($_POST['submit'])){
                            $s_price = $_POST['Price2'];
                            $s_quantity = $_POST['Quantity2'];

                            compute_2($s_price, $s_quantity);
                        }
                    ?>
                </div>
            </div>



            <div class="row pb-3">
                <div class="col-6 bg-light text-dark">
                    <h5 class="text-end mt-1 me-1 fs-6">THE TOTAL BILL IS:</h5>
                </div>
                <div class="col-6 bg-info text-dark ps-2 pt-1">

    <!-- php -->
                    <?php

                    function compute($num1, $num2, $num3, $num4){
                        $total = $num1 * $num2 + $num3 * $num4;
                        echo "$total";
                    }

                    if(isset($_POST['submit'])){
                        $t_price = $_POST['Price1'];
                        $t_quantity = $_POST['Quantity1'];
                        $s_price = $_POST['Price2'];
                        $s_quantity = $_POST['Quantity2'];

                        compute($t_price, $t_quantity, $s_price, $s_quantity);
                    }

                    ?>
    <!-- PHP END -->

                </div>
            </div>

        </form>
    </div>




</body>
</html>
