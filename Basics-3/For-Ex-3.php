<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // code
    // PHP code to demonstrate
    // star pattern 2

    // Function to demonstrate 
    // printing pattern 2
    function triangle_pattern($len)
    {
        $string = "*";
        $pyramid_str = "";
        $mid_point = ceil($len / 2);
        for ($i = 1; $i <= $mid_point; $i++) {
            for ($j = 1; $j <= $i; ++$j) {
                $pyramid_str .= $string . " ";
            }
            $pyramid_str .= "<br/>";
        }

        for ($i = $mid_point; $i >= 1; $i--) {
            for ($j = 1; $j < $i; ++$j) {
                $pyramid_str .= $string . " ";
            }
            $pyramid_str .= "<br/>";
        }

        return $pyramid_str;
    }
    echo triangle_pattern(9);
    ?>
</body>

</html>