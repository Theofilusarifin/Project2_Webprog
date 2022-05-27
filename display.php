<?php
$arrHape = array(
    array(
        "SKU" => "12345",
        "Merk" => "Samsung",
        "Model" => "Galaxy S21",
        "Harga" => 18000000,
        "url_gambar" => "assets/samsung_s21.png",
        "spec" => array(
            "Exynos2100", "5G", "4500mAH", "8GB", "256GB"
        )
    ),
    array(
        "SKU" => "12346",
        "Merk" => "Iphone",
        "Model" => "XR",
        "Harga" => 7499000,
        "url_gambar" => "assets/iphonee_xr.png",
        "spec" => array(
            "A12bionic", "4G", "2942mAH", "3GB", "256GB"
        )
    ),
    // fds
    array(
        "SKU" => "12347",
        "Merk" => "Xiaomi",
        "Model" => "11T",
        "Harga" => 5999999,
        "url_gambar" => "assets/xiaomii_11t.png",
        "spec" => array(
            "9 core Arm", "5G", "5000mAH", "8GB", "256GB"
        )
    ),

    array(
        "SKU" => "12348",
        "Merk" => "Redmi",
        "Model" => "10 2022",
        "Harga" => 2100000,
        "url_gambar" => "assets/redmii_10a.png",
        "spec" => array(
            "Hellio G88", "4G", "5000mAH", "4GB", "64GB"
        )
    ),
    array(
        "SKU" => "12349",
        "Merk" => "Oppo",
        "Model" => "A76",
        "Harga" => 5440000,
        "url_gambar" => "assets/oppoo_a76.png",
        "spec" => array(
            "Snapdragon", "4G", "5000mAH", "6GB", "128GB"
        )
    ),
    array(
        "SKU" => "12350",
        "Merk" => "Samsung",
        "Model" => "Z fold 3",
        "Harga" => 24999999,
        "url_gambar" => "assets/samsungg_zfold3.png",
        "spec" => array(
            "Snapdragon", "5G", "4400mAH", "12GB", "256GB"
        )
    ),
    array(
        "SKU" => "12351",
        "Merk" => "Samsung",
        "Model" => "A32",
        "Harga" => 3499000,
        "url_gambar" => "assets/samsunggalaxy_a32.png",
        "spec" => array(
            "Mediatel Hellio", "4G", "5000mAH", "6GB", "126GB"
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
            background: #021A4A ; 
            padding:0 ;
            /* margin:-59px 90px 0px -110px; */
            margin:-10px -20px 30px -10px;
            border-radius: 0px 0px 20px 20px;
            width:100%;
            padding: 30px 10px;
            height:110px;
        }

        .card {
            width:200px;
            filter: drop-shadow(0px 0px 11px rgba(0, 0, 0, 0.25));
            transition: 0.3s;
            border-radius: 5px;
            background-color: #fff;
            height: 300px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 0px 0px;
        }

        img {
            width: 450px;
            height:100px;
            left: 50px;
        }

        .row {
            display: grid;
            grid-template-columns: <?php for($i=1; $i<=$_POST['jumlah_kolom']; $i++) echo 'auto '; ?>;
            /* justify-content:space-between; */
            gap: 2em;
            margin-bottom: 2em;
            margin-top: 2em;
            padding: 5px 20px;
        }

        p {
            margin: 0;
            margin-bottom: 3em;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .mybutton {
            position: fixed;
            bottom:15px;
            left: 15px;
            background: #021A4A;
            border-radius: 61px;
            width: 130px;
            height: 40px;
            margin: 100px 10px;
            padding:0; margin:0;
            font-weight: normal;
            font-size: 18px;
            color: white;
        }
        p,h1,h2,h3,h4,h5,h6,label,.mybutton{
        
            font-family: 'Poppins', sans-serif;
            font-weight: normal;
        }

        .mybutton:hover {
            -webkit-transform: scale(1.05);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container" style="width:100%;">
        <div class="rectangle">
            <img style="padding-left:50px;"src="assets/product.png">
        </div>
        <?php
        if (isset($_POST['jumlah_kolom'])) {
            $jumlah_col = $_POST['jumlah_kolom'];
            if ($jumlah_col != "") {
                
                echo '<div class="row">';
                foreach($arrHape as $arr){
                    echo '<form action="detail.php" method="POST">';
                    // if (($i - 1) % $jumlah_col == 0) echo '<div class="row">';
                    // Card Disini
                    echo '
                    <div class="card">
                        <img src="'.$arr['url_gambar'].'" alt="Avatar" style="object-fit:fill; width:100% !important; height:150px;"><br>
                        <div class="container" style="padding-left:20px;">
                            <h4>'.$arr['Merk'].' '.$arr['Model'].'</h4>
                            <h4 style="color:red; margin-top: -20px;">Rp. '.$arr['Harga'].'</h4>
                        </div>
                        <input name="arr_id" type="hidden" value="' . ($i - 1) . '">
                        <input class="mybutton" type="submit" value="See Details">
                    </div>
                ';
                    echo '</form>';
                }
                
                echo '</div>';
            }
        }
        ?>
    </div>
    
</body>

</html>