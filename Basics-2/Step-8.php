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
    function is_Power_of_two($n)
    {
        if (($n & ($n - 1)) == 0) {
            return "$n is power of 2";
        } else {
            return "$n is not power of 2";
        }
    }
    print(is_Power_of_two(4) . "\n");
    ?>
</body>

</html>