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
        $var1 = 3;
        $var2 = 6;
        
        function swap($vr1,$vr2){
            $swap = $vr1;
            $vr1 = $vr2;
            $vr2 = $swap;
            echo "vr1 = $vr1 \n vr2 = $vr2";
        };
            swap ($var1,$var2);
    ?>
</body>

</html>