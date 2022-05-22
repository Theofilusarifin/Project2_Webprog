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
)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['jumlah_kolom'])) {
        $jumlah_col = $_POST['jumlah_kolom'];
        if ($jumlah_col != "") {
            for ($i = 1; $i <= $jumlah_col; $i++) {
                // Card Disini
                echo "test";
            }
        }
    }
    ?>
</body>

</html>