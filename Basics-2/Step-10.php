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
        function check_palindrome($string) 
        {
          if ($string == strrev($string))
              return 'true';
          else
              return 'false';
        }
        echo check_palindrome('madam')."\n";
    ?>
</body>

</html>