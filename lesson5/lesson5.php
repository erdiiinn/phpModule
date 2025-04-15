<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // $dogs = array(
    //     array("Husky", "Siberis", 15),
    //     array("Husky", "Siberis", 15),
    //     array("Husky", "Siberis", 15),
    // );
    
    // $dogs[0][0].": orgin:".$dogs[0][1].":life span;".$dogs[0][2]."<br>";
    // $dogs[1][0].": orgin:".$dogs[1][1].":life span;".$dogs[1][2]."<br>";
    // $dogs[2][0].": orgin:".$dogs[2][1].":life span;".$dogs[2][2]."<br>";

    // for($row=0; $row=3; $row++){
    //     echo "<p><b> row number $row </b></p>";
    //     echo"<ul>";
    // for($col=0; $col<3;$col++){
    //     echo "<li>" . $dogs[$row][$col];
    // }
    // echo "</ul>"
    // }

    // $array = array(
    //     array(1,2,3),
    //     array(1,2,3),
    //     array(1,2,3),

    // )

    // for($i=0; i<4; $i++){
    //     for($j=0, $j<4, $j++){
    //         echo "$i element $j <br>"
    //     }
    // }

    // for($i=0; $i<5; $i++){
    //     for($j = $i; $i<=5; $j++){
    //         echo'&nbsp';
    //     }
    //     for($j=5; $j<=5 $j++){
    //         echo '*';
    //     }
    //     echo "<br>";
    // }

    ?>


    <?php
    //Associative Loops

    // $grade = array(
    //     "Math" => '3',
    //     "Art" => '2',
    //     "History" => '3',
    //     "Music" => '4',
    // )

    $grade = ['Math'] = '3',
    $grade = ['Art'] = '2',
    $grade = ['History'] = '3',
    $grade = ['Music'] = '4',

    // echo = "Math grade is " .  $grade['Math'];

    foreach($grade as $subject => $grade){
        echo "Subject " . $subject. "Grade " . $grade;
        echo "<br>";
    }
    
     ?>
</body>
</html>