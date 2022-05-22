<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- dvsdvdsvsdv -->
<body>
    <p>Jumlah Kolom: </p>

    <select name="jumlah_kolom">
        <?php
            for ($i=3; $i<7; $i++) { 
                echo("<option value='$i'=> $i Kolom </option>");
            }
        ?>
    </select>
</body>

</html>