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
        $name = 'Moe';
        $position = 'developper';
        $github_url = 'http://github_url';
        echo '<br/>';

        echo "Hello, I'm ".$name. "I'm a ".$position." please check my github link" .$github_url;
        echo '<br/>';

        echo "Hello, I'm $name, I'm a $position please check my github link $github_url";
        echo '<br/>';

        echo 'Hello, I\'m $name, I\'m a '.$position.' please check my github link '.$github_url;
        echo '<br/>';
        
    ?>
</body>

</html>

