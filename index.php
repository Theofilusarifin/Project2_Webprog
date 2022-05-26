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
            background: url("assets/index_backgorund.png") no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            min-height: 1200px;
            overflow-y: hidden;
            color: #FFFFFF;
            min-height: 1200px;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            background: rgba(2, 26, 74, 0.5);
            overflow: hidden;
            height: 100%;
            min-height: 1200px;
            position: relative;
        }

        img {
            position: absolute;
            top: 5%;
            left: 5%;
        }

        form {
            position: absolute;
            top: 30%;
            left: 43%;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
        }

        .myselect {
            text-align-last: center;
            padding: 10px 25px;
            margin-left: -65px;
            width: 400px;

            color: #bababa;
            border: 3px solid #bababa;
            border-radius: 0;
            background-color: white;
            background-image:
                linear-gradient(45deg, transparent 50%, #bababa 50%),
                linear-gradient(135deg, #bababa 50%, transparent 50%);
            background-repeat: no-repeat;
            background-position:
                calc(100% - 20px) calc(1em + 2px),
                calc(100% - 15px) calc(1em + 2px),
                calc(100% - 2.5em) 0.5em;
            background-size:
                5px 5px,
                5px 5px,
                1px 1.5em;

            font: inherit;

            -webkit-appearance: none;
        }

        .myselect:hover {
            cursor: pointer;
        }

        .myselect:focus {
            outline: 0;
        }

        .mybutton {
            background: linear-gradient(180deg, #3E064B 0%, #5B1E7B 40.94%, #9D53E7 100%);
            border: 1px solid #FFFFFF;
            border-radius: 61px;
            width: 265px;
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
        <img src="assets/logo.png" alt="">
        <form action="display.php" method="POST">
            <div class="content">
                <p>Custom Column</p>
                <select name="jumlah_kolom" class="myselect">
                    <option value="">-- Pilih Jumlah Kolom --</option>
                    <?php
                    for ($i = 3; $i <= 5; $i++) {
                        echo ("<option style='color: red;' value='$i'=> $i Kolom </option>");
                    }
                    ?>
                </select>
                <br>
                <input class="mybutton" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>