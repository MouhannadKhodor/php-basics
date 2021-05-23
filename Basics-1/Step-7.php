<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    "Hello world, Help me I am using PHP"
    <br/>
    <br/>
    <?php
        $birth_year = 1998;
        $current_year = 2021;
        if (($current_year-$birth_year) >= 18) echo 'you can drive';
        else {echo 'you can\'t drive yet';}
    ?>
</body>

</html>

