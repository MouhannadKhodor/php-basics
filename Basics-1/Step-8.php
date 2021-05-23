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
        $fruits = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues","Watermelon");
        echo 'Hello Sir, do you have '.$fruits[0].','.$fruits[1].', and '.$fruits[2].'? Also if you sell fruits can I find a '.$fruits[5].'?';

        echo '<br/>';
        echo '<br/>';
        echo '<br/>';

        $grocery = array (
            array('eggs' , 'balade', 'mazere3' ),
            array('milk','Fresh', 'Taanayel'),
            array('water-pack', 'Tanoureen', 'Reem')
        );

        echo "Hey Sir, Please I need 1 pack of ".$grocery[0][1].' '.$grocery[0][0]." and 3 ".$grocery[2][2].' '. $grocery[2][0];

    ?>
</body>

</html>

