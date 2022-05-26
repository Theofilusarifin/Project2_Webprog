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
            float:auto;
            left:100px;
            font-family: 'Poppins', sans-serif;
            
        }

        .container {
            width: 500px;
            height:500px;
            /* background: rgba(2, 26, 74, 0.5);
            overflow: hidden;
            height: 100%;
            min-height: 1200px;
            position: relative; */
        } 

        img {
            position: absolute;
            top: 50px;
            left: 225px;
            width: 1100px;
            height:500px;

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
        .rectangle{
            position: absolute;
            background: white ; 
            padding: 15px 10px ;
            width:700px;
            height: 60px;
            margin:280px -270px; 
            border-radius:8px;
            box-shadow: 3px 9px 28px 1px rgba(0, 0, 0, 0.15);
        }
        .myselect {
            text-align-last: center;
            padding: 10px 25px;
            margin-left: 10px;
            margin-top: 20px;
            width: 400px;
            height:40px;

            color: #bababa;
            border: 2px solid #021A4A;
            
            border-radius: 12px;
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
        <form action="display.php" method="POST">
            <div class="content">
            <div class="rectangle">
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
                </div>
        </form>
    </div>
</body>

</html>