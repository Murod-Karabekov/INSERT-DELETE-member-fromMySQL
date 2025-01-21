<?php 

declare (strict_types=1);

ini_set ('display_errors','1');
error_reporting (E_ALL);

// if(isset($_GET['givenName'], $_GET['familyName'])){
//     print ("Ismingiz: {$_GET['givenName']} \n");
//     print ("Familiyangiz: {$_GET['familyName']}");
// }else{
//     print("Iltimos so'rovnomani to'ldiring! ");
// }

$host = '127.0.0.1';
$dbName = 'kollej';
$user = 'root';
$password = '';

$dsn = "mysql:dbname=$dbName;host=$host";

$pdo = new PDO($dsn, $user, $password);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP va HTML</title>
</head>
<body>
    <!-- <form>
        Ismingiz: <input type="text" name="givenName" /> <br />
        Familiyangiz: <input type="text" name="familyName" /> <br /> <br />

        <button>Yuborish</button>
    </form> -->
</body>
</html>