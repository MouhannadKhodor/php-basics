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
        function calculateArea($height,$width){
            return ('The area is '.$height*$width);
        };
       echo calculateArea(5,5)
    ?>
</body>

</html>

