<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japanese Regions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <div class="container mt-4" style="max-width:30rem;">

        <?php
            $JapaneseRegion = array(
                "Hokkaido" => array("Hokkaido" => "Sapporo"),
                "Chubu" => array("Ishikawa" => "Kanazawa", "Shizuoka" => "Fuji",
                                 "Toyama" => "Toyama", "Aichi" => "Nagoya"),
                "Chugoku" => array("Yamaguchi" => "Shimonoseki", "Tottori" => "Tottori")
            );

            foreach ($JapaneseRegion as $region => $prefectures){
                echo "<div class='mb-4'>";
                echo "<h2>$region</h2>";
                echo "<table class='table table-bordered'>";
                echo "<thead>
                        <tr>
                            <th>Prefecture</th>
                            <th>City</th>
                        </tr>
                    <thead>";

                echo "<tbody>";
                foreach($prefectures as $prefecture => $city){
                    echo "<tr>";
                        echo "<td>$prefecture</td>";
                        echo "<td>$city</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
            }
        ?>

    </div>
</body>
</html>

