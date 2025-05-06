<!-- 

//  $username = _GET [$username];
//  $password = _GET [$password];

//  echo $username;
//  echo "<br>"
//  echo $password;







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getMetoda"></form>

    <label for="username"> username </label>
    <input type="text" name="username" id="username">
    <label for="password"> passowrd </label>
    <input type="password" name="password" id="password">

    <input type="submit" value="submit">

</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="POST">
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="surname" placeholder="surname"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>    
</body>
</html>

