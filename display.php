<?php
session_start();
if (isset($_SESSION['arrHape'])) {
    $arrHape = $_SESSION['arrHape'];
}
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
            overflow: hidden;
        }

        .rectangle {
            background: #021A4A;
            padding: 0;
            /* margin:-59px 90px 0px -110px; */
            margin: -10px -20px 30px -10px;
            border-radius: 0px 0px 20px 20px;
            width: 100%;
            padding: 30px 10px;
            height: 110px;
        }

        .card {
            /* position: relative; */
            width: 200px;
            filter: drop-shadow(0px 0px 11px rgba(0, 0, 0, 0.25));
            transition: 0.3s;
            border-radius: 5px;
            background-color: #fff;
            height: 300px;
            margin-bottom:5%;
        }

        .container {
            padding: 0px 0px;
        }

        img {
            width: 450px;
            height: 100px;
            left: 50px;
        }

        .row {
            display: grid;
            grid-template-columns: <?php $width = (int)(100/$_GET['jumlah_kolom']); for ($i = 1; $i <= $_GET['jumlah_kolom']; $i++) echo($width.'% ') ?>;
            width : 80%;
            grid-gap: 10px;
            padding: 0 10%;
        }

        p {
            margin: 0;
            margin-bottom: 3em;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .mybutton {
            position: fixed;
            bottom: 15px;
            left: 15px;
            background: #021A4A;
            border-radius: 61px;
            width: 130px;
            height: 40px;
            margin: 100px 10px;
            padding: 0;
            margin: 0;
            font-weight: normal;
            font-size: 18px;
            color: white;
        }

        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        label,
        .mybutton {

            font-family: 'Poppins', sans-serif;
            font-weight: normal;
        }

        .mybutton:hover {
            -webkit-transform: scale(1.05);
            cursor: pointer;
        }

        .box{
            position: relative;
            
        }

        .add:hover {
            cursor: pointer;
            -webkit-transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container" style="width:100%;">
        <div class="rectangle">
            <img style="padding-left:50px;" src="assets/product.png">
        </div>
        <?php
        if (isset($_GET['jumlah_kolom'])) {
            $jumlah_col = $_GET['jumlah_kolom'];
            if ($jumlah_col != "") {

                echo '<div class="row">';
                $i = 0;
                foreach ($arrHape as $arr) {
                    echo('<div class="box">');
                    echo '<form action="detail.php" method="GET">';
                    // if (($i - 1) % $jumlah_col == 0) echo '<div class="row">';
                    // Card Disini
                    echo '
                    <div class="card">
                        <img src="' . $arr['url_gambar'] . '" alt="Avatar" style="object-fit:fill; width:100% !important; height:150px;"><br>
                        <div class="container" style="padding-left:20px;">
                            <h4>' . $arr['Merk'] . ' ' . $arr['Model'] . '</h4>
                            <h4 style="color:red; margin-top: -20px;">Rp. ' . $arr['Harga'] . '</h4>
                        </div>
                        <input name="arr_id" type="hidden" value="' . ($i) . '">
                        <input class="mybutton" type="submit" value="See Details">
                    </div>
                    ';
                    $i++;
                    echo '</form>';
                    echo '</div>';
                }

                echo '</div>';
            }
        }
        ?>
    </div>

</body>

</html>