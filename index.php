<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="display.php" method="POST">
            <div class="right-col" style="float: left">
                Jumlah Kolom:
            </div>
            <div class="left-col" style="padding-left: 120px;">
                <select name="jumlah_kolom">
                    <option value="">-- Pilih Jumlah Kolom --</option>
                    <?php
                    for ($i = 3; $i <= 6; $i++) {
                        echo ("<option style='color: red;' value='$i'=> $i Kolom </option>");
                    }
                    ?>
                </select>
                <br>
                <input style="margin-top: 20px;" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>