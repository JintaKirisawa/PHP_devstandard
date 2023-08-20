<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev-Std-Assignment-1st</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- How many products do you want to buy? -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark text-white text-center mt-4">
                    <div class="card-header">
                        <h3 class="mb-0">How many products do you want to buy?</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="number" name="number_of_products" class="form-control w-50 mx-auto text-center">
                            <button type="submit" name="submit" class="btn btn-primary mt-3 form-control w-25 mx-auto fw-bold">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php

    // Details of the Products
    if(isset($_POST['submit'])){

        $productNum = $_POST['number_of_products'];

        echo "<div class='container'>
            <div class='row justify-content-center'>
                <div class='col-md-6'>
                    <div class='card bg-dark text-white text-center mt-4'>
                        <div class='card-header'>
                            <h3 class='mb-0'>Details of the Products</h3>
                        </div>
                        <div class='card-body'>
                            <div class='row'>
                                <div class='col-6 text-start text-warning fw-bold'><h5>Product Name</h5></div>
                                <div class='col-6 text-end text-warning fw-bold'><h5>Product Price</h5></div>
                            </div>
                            <form action='' method='post'>";
                                for($i = 1; $i <= $productNum; $i++){
                                    echo "<div class='row'>
                                            <div class='col-6 text-left mb-2'>
                                                <input type='text' class='form-control mx-auto my-1' name='product_names[]' placeholder=' Product $i'>
                                            </div>
                                            <div class='col-6 text-right'>
                                                <input type='number' class='form-control mx-auto my-1 text-end' name='product_prices[]' placeholder=' Product $i Price'>
                                            </div>
                                        </div>";
                                }
                            echo "<button type='submit' name='save' class='btn btn-warning mt-3 form-control w-25 mx-auto fw-bold'>Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    // Buy Quantity
    if(isset($_POST['save'])){

        $productNames = isset($_POST['product_names']) ? $_POST['product_names'] : array();
        $productPrices = isset($_POST['product_prices']) ? $_POST['product_prices'] : array();

        echo "<div class='container'>
            <div class='row justify-content-center'>
                <div class='col-md-6'>
                    <div class='card bg-dark text-white text-center mt-4'>
                        <div class='card-header'>
                            <h3 class='mb-0'>Buy Quantity</h3>
                        </div>
                        <div class='card-body'>
                            <div class='row'>
                                <div class='col-6 text-start text-danger fw-bold'><h5>Product Price</h5></div>
                                <div class='col-6 text-end text-danger fw-bold'><h5>Product Quantity</h5></div>
                            </div>

                            <form action='' method='post'>";
                                for($i = 0; $i < count($_POST['product_names']); $i++){
                                echo "<div class='row'>
                                        <div class='col-6 text-start '>$productNames[$i]'s Price</div>
                                        <div class='col-6 text-end '>$productNames[$i]'s Quantity</div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-6 text-left mb-2'>
                                            <input type='hidden' name='product_names[]' value='$productNames[$i]'>
                                            <input type='number' class='form-control mx-auto my-1' name='product_prices[]' value='$productPrices[$i]' readonly>
                                        </div>
                                        <div class='col-6 text-right'>
                                            <input type='number' class='form-control mx-auto my-1 text-end' name='product_quantities[]'>
                                        </div>
                                    </div>";
                                }

                                echo "<div class='row justify-content-center'>
                                        <div class='col-7'>
                                            <div class='card card-body bg-info text-dark text-center fw-bold fst-italic p-1 my-3'>
                                                <p class='m-0'><i class='fa-solid fa-tag'></i> avail 10% discount for every 10pcs /</p>
                                                <p class='m-0'>quantities EACH PRODUCT!</p>
                                            </div>
                                        </div>
                                </div>";

                                echo "<button type='submit' name='compute' class='btn btn-danger my-3 form-control mx-auto fw-bold'>Compute</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    // Sales Summary
    if(isset($_POST['compute'])){

        $productNames = isset($_POST['product_names']) ? $_POST['product_names'] : array();
        $productPrices = isset($_POST['product_prices']) ? $_POST['product_prices'] : array();
        $productQuantities = $_POST['product_quantities'] ? $_POST['product_quantities'] : array();

        $grandTotal = 0;

        echo "<div class='container'>
            <div class='row justify-content-center'>
                <div class='col-md-6'>
                    <div class='card bg-dark text-white text-center mt-4'>
                        <div class='card-header'>
                            <h3 class='mb-0'>Sales Summary</h3>
                        </div>
                        <div class='card-body'>
                            <table class='table table-striped table-dark'>
                                <thead>
                                    <tr>
                                        <th class='col text-start text-warning fw-bold'><h5>Product</h5></th>
                                        <th class='col text-end text-warning fw-bold'><h5>Price</h5></th>
                                        <th class='col text-end text-warning fw-bold'><h5>Quantity</h5></th>
                                        <th class='col text-end text-warning fw-bold'><h5>Discount</h5></th>
                                        <th class='col text-end text-warning fw-bold'><h5>Total</h5></th>
                                    </tr>
                                </thead>
                                <tbody>";
                                    for($i = 0; $i < count($productNames); $i++){
                                        $productName = $productNames[$i];
                                        $price = $productPrices[$i];
                                        $quantity = $productQuantities[$i];

                                        // Apply discount logic
                                        $discountQuantity = floor($quantity / 10) * 10;
                                        if($discountQuantity === 0){
                                            $discount = 0;
                                        }
                                        else{
                                            $discount = ($discountQuantity / 10) * $price;
                                        }
                                        $total = ($quantity * $price) - $discount;

                                        $grandTotal += $total;

                                        echo "<tr>
                                            <td class='col text-start text-white fw-bold'>$productName</td>
                                            <td class='col text-end text-white'>$".number_format($price, 2)."</td>
                                            <td class='col text-end text-white'>$quantity</td>
                                            <td class='col text-end text-white'>";
                                            if($discount > 0){
                                                echo "$ ".number_format($discount, 2)."";
                                            }
                                            else{
                                                echo "<span class='fst-italic'>no discount</span>";
                                            }
                                            echo "</td>
                                            <td class='col text-end text-white'>$".number_format($total, 2)."</td>
                                        </tr>";
                                    }
                                        echo "<tr>
                                            <td class='col text-end text-danger fw-bold fs-4' colspan='4'>Grand Total:</td>
                                            <td class='col text-end text-white fw-bold fs-4'>$".number_format($grandTotal, 2)."</td>
                                        </tr>";
                                echo "</tbody>
                            </table>

                            <form method='post'>
                                <button type='submit' name='back' class='btn btn-secondary my-5 mx-auto fw-bold w-50 py-2'>Back to homepage</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    // Back to homepage
    if(isset($_POST['back'])){
        exit();
    }

?>