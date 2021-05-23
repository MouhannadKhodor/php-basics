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
        function sum_of_digits($num) {
            $nums = (string)$num;
            $digits_sum = 0;
              for ($i = 0; $i < strlen($nums); $i++) {
                     $digits_sum += $nums[$i];
                       }
              return $digits_sum;
        }
        echo sum_of_digits(123)."\n";
        echo sum_of_digits(99)."\n";
    ?>
</body>

</html>