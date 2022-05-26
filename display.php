<?php
$arrHape = array(
    array(
        "SKU" => "12345",
        "Merk" => "Samsung",
        "Model" => "Galaxy S21",
        "Harga" => 18000000,
        "url_gambar" => "<img src= assets/samsung_s21.png>",
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
            background-color: #FFFFFF;
        }

        .rectangle{
            position:absolute;
            background: #021A4A ; 
            padding: 15px 10px ;
            margin:-59px 90px 0px -110px;
            border-radius: 0px 0px 20px 20px;
            width:1518px;
            height:100px;
        }

        .card {

            filter: drop-shadow(0px 0px 11px rgba(0, 0, 0, 0.25));
            transition: 0.3s;
            border-radius: 5px;
            background-color: #fff;
            width: 307px;
            height: 416px;

        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 50px 100px;
        }

        img {
            position: absolute;
            width: 300px;
            height:80px;
            left: 50px;
        }

        .row {
            display: flex;
            /* justify-content:space-between; */
            gap: 2em;
            margin-bottom: 2em;
            margin-top: 6em;
        }

        p {
            margin: 0;
            margin-bottom: 3em;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .mybutton {
            position: absolute;
            background: #021A4A;
            border-radius: 61px;
            width: 130px;
            height: 40px;
            margin: 100px 20px;
            ;
            font-family: 'Poppins', sans-serif;
            font-weight: normal;
            font-size: 18px;
            color: white;
        }

        .mybutton:hover {
            -webkit-transform: scale(1.05);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action=""></form>
        <div class="rectangle">
        <img src="assets/product.png">
        </div>

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
                        <input name="arr_id" type="hidden" value="' . ($i - 1) . '">
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