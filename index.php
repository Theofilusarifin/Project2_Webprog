<?php
session_start();
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
            /* background: url("assets/cover.png") no-repeat center center; */
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: 500px;
            min-height: 1200px;
            overflow-y: hidden;
            color: #FFFFFF;
            min-height: 1200px;
            float: auto;
            left: 100px;
            font-family: 'Poppins', sans-serif;

        }

        .container {
            width: 500px;
            height: 500px;
            /* background: rgba(2, 26, 74, 0.5);
            overflow: hidden;
            height: 100%;
            min-height: 1200px;
            position: relative; */
        }

        img {
            position: absolute;
            top: 80px;
            left: 350px;
            width: 1300px;
            height: 600px;

        }

        form {
            position: absolute;
            top: 30%;
            left: 43%;
        }

        p {
            position: absolute;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            color: #021A4A;
            right: 550px;
            bottom: 37px;
        }

        .rectangle {
            position: absolute;
            background: white;
            padding: 15px 10px;
            width: 700px;
            height: 60px;
            margin: 340px -200px;
            border-radius: 8px;
            box-shadow: 3px 9px 28px 1px rgba(0, 0, 0, 0.15);
        }

        .myselect {
            text-align-last: center;
            padding: 10px 25px;
            margin-left: 10px;
            margin-top: 20px;
            width: 400px;
            height: 40px;

            color: #bababa;
            border: 2px solid #021A4A;

            border-radius: 12px;
            background-color: white;
            font: inherit;
            font-size: 14px;
            color: #021A4A;

            -webkit-appearance: none;
        }

        .myselect:hover {
            cursor: pointer;
        }

        .myselect:focus {
            outline: 0;
        }

        .mybutton {
            position: absolute;
            background: #021A4A;
            border-radius: 61px;
            width: 150px;
            height: 40px;
            margin: -40px 540px;
            ;
            font-family: 'Poppins', sans-serif;
            font-weight: normal;
            font-size: 16px;
            color: white;
        }

        .mybutton:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="assets/cover.png" alt="">
        <form action="display.php" method="GET">
            <div class="content">
                <div class="rectangle">
                    <p>Custom Column</p>
                    <select name="jumlah_kolom" class="myselect">
                        <option value="">-- Pilih Jumlah Kolom --</option>
                        <?php
                        for ($i = 4; $i <= 7; $i++) {
                            echo ("<option style='color: red;' value='$i'=> $i Kolom </option>");
                        }
                        ?>
                    </select>
                    <br>
                    <input class="mybutton" type="submit" value="Search">
                </div>
            </div>
        </form>
    </div>
</body>

</html>

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
        "SKU" => "12349",
        "Merk" => "Oppo",
        "Model" => "A76",
        "Harga" => 5440000,
        "url_gambar" => "assets/oppoo_a76.png",
        "spec" => array(
            "Snapdragon", "4G", "5000mAH", "6GB", "128GB"
        )
    ),
);

$_SESSION['arrHape'] = $arrHape;
?>