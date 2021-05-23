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
        $course_name = 'devTools';
        $enrolled_students = '30';
        $price = '3500';
        $on_discount = true;

        echo 'Course Title: ' .$course_name.'<br/>'.
        'Enrolled Students: ' .$enrolled_students.'<br/>'.
        'Course price: ' .$price.'<br/>'.
        'Course on discount: ' .$on_discount.'<br/>';
    ?>
</body>

</html>

