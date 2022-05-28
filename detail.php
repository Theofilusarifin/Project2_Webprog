<?php
session_start();
if (isset($_SESSION['arrHape'])) {
    $arrHape = $_SESSION['arrHape'];
}
?>

<?php
$data = "";
if (isset($_GET['arr_id'])) {
    $data = $arrHape[$_GET['arr_id']];
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

        html {
            overflow: hidden;
        }

        .container {
            position: relative;
            height: 5000px;
        }

        .review {
            position: fixed;
            bottom: -175px;
            margin-left: -10px;
            width: auto;
            height: 535px;
        }

        .about {
            position: fixed;
            top: 30px;
            left: 100px;
            width: 400px;
            height: auto;
        }

        .card {
            position: fixed;
            top: 130px;
            left: 100px;
            width: 400px;
            height: 400px;
            filter: drop-shadow(0px 0px 11px rgba(0, 0, 0, 0.15));
            transition: 0.3s;
            border-radius: 5px;
            background-color: #fff;
        }

        .info {
            position: fixed;
            top: 105px;
            left: 650px;
            font-family: 'Poppins', sans-serif;
        }

        h1,
        p {
            color: #021A4A;
            font-family: 'Poppins', sans-serif;
        }

        p {
            margin-bottom: 30px;
            font-size: 20px;
        }

        ul,
        li {
            margin-top: 27px;
            color: #A4A4A5;
            margin-left: -10px;
            font-size: 18px;
        }

        .add {
            position: fixed;
            top: 200px;
            left: 1310px;
            height: 100px;
            width: auto;
        }

        .price {
            position: fixed;
            top: 105px;
            left: 1300px;
            height: 100px;
            width: auto;
        }

        input[type=submit] {
            width: 200px;
            height: 50px;
            font-family: 'Poppins', sans-serif;
            background-color: #41D18E;
            color: white;
            border-radius: 5px;
            font-size: 18px;
            border: none;
        }

        input[type=submit]:hover {
            cursor: pointer;
            -webkit-transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container">
        <img class="about" src="assets/About.png" alt="">
        <div class="card">
            <img src="<?php echo ($data['url_gambar']) ?>" style="object-fit:fill; width:100% !important; height:400px;">
        </div>
        <div class="info">
            <?php
            echo ('<h1>' . $data['Merk'] . ' ' . $data['Model'] . '</h1>');
            echo ('<p> SKU ' . $data['SKU'] . '</p>');
            echo ('<ul>');
            foreach ($data['spec'] as $spec) {
                echo ("<li>$spec</li>");
            }
            echo ('</ul>');
            ?>
        </div>
        <div class="price">
            <h1 style="color:#FF0000"><?php echo ("Rp." . $data['Harga']) ?></h1>
        </div>
        <div class="add">
            <form action="proses.php" method="GET">
                <input type="hidden" name="type" value="add">
                <input type="hidden" name="data" value="<?php echo ($_GET['arr_id']) ?>">
                <input type="submit" value="Add To Cart">
            </form>
        </div>
        <img class="review" src="assets/Review.png" alt="">
    </div>
</body>

</html>