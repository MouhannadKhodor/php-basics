<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $n = 3;
        $x = 1;
        for($i=1;$i<=$n-1;$i++)
        {
         $x*=($i+1); 
        }
        echo "The factorial of  $n = $x"."\n";
    ?>
</body>

</html>