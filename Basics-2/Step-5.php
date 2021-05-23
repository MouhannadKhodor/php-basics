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
    function wtd($word)
    {
        switch ($word) {
            case 'zero':
                echo '0';
                break;
            case 'one':
                echo '1';
                break;
            case 'five':
                echo '5';
                break;
        }
    }
    wtd('five')
    ?>
</body>

</html>