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

        .cart {
            position: fixed;
            top: 30px;
            left: 100px;
            width: 200px;
            height: auto;
        }

        .card{
            position: fixed;
            top: 130px;
            left: 100px;
            width: 200px;
            height: 200px;
            filter: drop-shadow(0px 0px 11px rgba(0, 0, 0, 0.15));
            transition: 0.3s;
            border-radius: 10px;
            background-color: #fff;
        }
        </style>
</head>
<body>
<div class="container" style="width:100%;">
    <img class="cart" left:50px;" src="assets/Cart.png">
    <div class="card">
            <img src="<?php echo ($data['url_gambar']) ?>" style="object-fit:fill; width:100% !important; height:150px;">
    </div>


</div>