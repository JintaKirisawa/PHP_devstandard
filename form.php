<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="firstname" id="firstname" placeholder="Enter First Name">
        <input type="submit" name="showtext" id="showtext">
    </form>

</body>
</html>

<?php

if(isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
    echo "<div class='card card-body bg-light text-dark'>$firstname";
}

?>