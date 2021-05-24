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
    function replace($str)
    {
        
        $str = str_replace(array('Python', 'PHP'), array('@ython', 'Python'), $str);
        echo str_replace('@ython', 'PHP', $str), PHP_EOL;
    }
    replace('PHP is a lot better than Python')
    ?>
</body>

</html>