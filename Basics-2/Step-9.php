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
        function my_sqrt($n)
        {
          $x = $n;
          $y = 1;
          while($x > $y)
          {
            $x = ($x + $y)/2;
            $y = $n/$x;
          }
          return $x;
        }
        print(my_sqrt(36));
    ?>
</body>

</html>