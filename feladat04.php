<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>
<body>
    <?php
    for($i=10;$i<100;$i=$i+10) { ?>
    <p style="font-size: <?= $i ?>px;">Helló Világ!</p>
    <?php } ?>
</body>
</html>