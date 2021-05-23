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
        function greater($num){
            if ($num > 30) echo "$num is Greater than 30";
            else if ($num > 20) echo "$num is Greater than 20";
            else if ($num > 10) echo "$num is Greater than 10";
            else echo "$num is Less than 10";
        }

        greater(40)
    ?>
</body>

</html>