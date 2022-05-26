<?php
$arrHape = array(
    array(
        "SKU" => "12345",
        "Merk" => "Samsung",
        "Model" => "Galaxy S22",
        "Harga" => 18000000,
        "url_gambar" => "....",
        "spec" => array(
            "4GB", "5G", "5150mAH", "256GB"
        )
    ),
    array(
        "SKU" => "54321",
        "Merk" => "Xiaomi",
        "Model" => "Mi 11 Pro",
        "Harga" => 9500000,
        "url_gambar" => "....",
        "spec" => array(
            "8GB", "5G", "5050mAH", "256GB"
        )
    ),
    array(
        "SKU" => "AB012",
        "Merk" => "Redmi",
        "Model" => "Redmi Note 12",
        "Harga" => 6500000,
        "url_gambar" => "....",
        "spec" => array(
            "6GB", "5G", "5350mAH", "256GB"
        )
    ),

    array(
        "SKU" => "12345",
        "Merk" => "Samsung",
        "Model" => "Galaxy S22",
        "Harga" => 18000000,
        "url_gambar" => "....",
        "spec" => array(
            "4GB", "5G", "5150mAH", "256GB"
        )
    ),
    array(
        "SKU" => "54321",
        "Merk" => "Xiaomi",
        "Model" => "Mi 11 Pro",
        "Harga" => 9500000,
        "url_gambar" => "....",
        "spec" => array(
            "8GB", "5G", "5050mAH", "256GB"
        )
    ),
    array(
        "SKU" => "AB012",
        "Merk" => "Redmi",
        "Model" => "Redmi Note 12",
        "Harga" => 6500000,
        "url_gambar" => "....",
        "spec" => array(
            "6GB", "5G", "5350mAH", "256GB"
        )
    ),
    array(
        "SKU" => "AB012",
        "Merk" => "Redmi",
        "Model" => "Redmi Note 12",
        "Harga" => 6500000,
        "url_gambar" => "....",
        "spec" => array(
            "6GB", "5G", "5350mAH", "256GB"
        )
    ),
)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@300&family=Poppins:wght@500;600;700&display=swap');

        body {
            background-color: #021A4A;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 5px;
            background-color: #fff;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 50px 100px;
        }

        img {
            border-radius: 5px 5px 0 0;
        }

        .row {
            display: flex;
            /* justify-content:space-between; */
            gap: 2em;
            margin-bottom: 2em;
        }

        p {
            margin: 0;
            margin-bottom: 3em;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .mybutton {
            background: linear-gradient(180deg, #3E064B 0%, #5B1E7B 40.94%, #9D53E7 100%);
            border: 1px solid #FFFFFF;
            border-radius: 61px;
            width: 150px;
            height: 50px;
            margin-top: 40px;
            ;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            font-size: 18px;
            color: white;
        }

        .mybutton:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action=""></form>
        <img src="assets/our_products.png">
        <p>Nikmati pengalamanmu dengan smartphone pilihanmu!</p>
        <?php
        if (isset($_POST['jumlah_kolom'])) {
            $jumlah_col = $_POST['jumlah_kolom'];
            if ($jumlah_col != "") {
                for ($i = 1; $i <= count($arrHape); $i++) {
                    echo '<form action="detail.php" method="POST">';
                    if (($i - 1) % $jumlah_col == 0) echo '<div class="row">';
                    // Card Disini
                    echo '
                    <div class="card">
                        <img src="img_avatar.png" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                        <input name="arr_id" type="hidden" value="'.($i-1).'">
                        <input class="mybutton" type="submit" value="See Details">
                    </div>
                ';
                    if ($i % $jumlah_col == 0) echo '</div>';
                    echo '</form>';
                }
            }
        }
        ?>
    </div>
</body>

</html>