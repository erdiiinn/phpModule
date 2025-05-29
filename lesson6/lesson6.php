<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
//  $my_file = fopen ("ds.txt" , "r");


$myfiletext="ds.txt";


$myfiledata = fread($my_filename, $size);

//  fclose($my_file);


 // w - write only mode

 // r - read only mode

 // w+, r+, a+

//  $file = fopen("ds.txt" , "r");

//  while(!feof($file)){
//     echo fgets($file)."<br>";
//  }
 
//  fclose($my_file);
 


//  $my_file = fopen("ds.txt" , "r");

//  $my_text = "Digital School \n";

//  fwrite($my_file, $my_text);


file_put_contents('ds.txt' , "Add more text");

echo file_get_contents("ds.txt");
 ?>

</body>
</html>