<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $dogs = array(
        array("Husky", "Siberis", 15),
        array("Husky", "Siberis", 15),
        array("Husky", "Siberis", 15),
    );
    
    $dogs[0][0].": orgin:".$dogs[0][1].":life span;".$dogs[0][2]."<br>";
    $dogs[1][0].": orgin:".$dogs[1][1].":life span;".$dogs[1][2]."<br>";
    $dogs[2][0].": orgin:".$dogs[2][1].":life span;".$dogs[2][2]."<br>";

    for($row=0; $row=3; $row++){
        echo "<p><b> row number $row </b></p>";
        echo"<ul>";
    for($col=0; $col<3;$col++){
        echo "<li>" . $dogs[$row][$col];
    }
    echo "</ul>"
    }
    ?>
</body>
</html>