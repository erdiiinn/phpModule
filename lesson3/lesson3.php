<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num = 10;
    $age = 88;
    $numri = 23;

    $a = 10;
    $b = 50;

    $age2 = 15;

    if($num < 0){
        echo "$num is less than 0" . "<br>";
    }
    
    if(($age > 12) && ($age <20)){
        echo "You are a teenager";
    }else{
        echo "You are a grown man";
    }

    if($numri < 0){
        echo "The value  of \$num is a negative number";
    }else if($numri == 0){
        echo "The value of $numri is 0";
    }else{
        echo "The number of $numri is a positive number";
    }

    if($a==$b){
        echo "1";
    }else if($a > $b){
        echo "2";
    }else{
        echo "3";
    }

    switch($age2){
        case($age2 >= 18) && ($age2 <= 25);
        echo "You are a minor (0 - 18)  <br>";
        break;

        case($age2 > 18);
        echo "You are a young adult";
        break;

        case($age2 > 25);
        echo "You are an adult";
    }

    ?>

</body>
</html>