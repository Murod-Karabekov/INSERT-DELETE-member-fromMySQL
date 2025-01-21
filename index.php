<?php 

declare (strict_types=1);

ini_set ('display_errors','1');
error_reporting (E_ALL);

// if(isset($_GET['givenName'], $_GET['familyName'], $_GET['birthDay'])){
//     print ("Ismingiz: {$_GET['givenName']} \n");
//     print ("Shahringiz: {$_GET['city']}");
//     print ("Tug'ilgan sana: {$_GET['birthDay']}");
// }else{
//     print("Iltimos so'rovnomani to'ldiring! ");
// }

$host = '127.0.0.1';
$dbName = 'kollej';
$user = 'root';
$password = '';

$dsn = "mysql:dbname=$dbName;host=$host";

$pdo = new PDO($dsn, $user, $password);

//MO ga talabalarni qo'shish

if(isset($_POST['givenName'], $_POST['city'], $_POST['birthDay'])){
    $name = $_POST['givenName'];
    $city = $_POST['city'];
    $birthDay = $_POST['birthDay'];

    $pdoStatement = $pdo -> prepare("
        INSERT INTO `students`
        (`givenName`,`city`,`birthDay`)
        VALUES
        (:name, :city, :birthDay)
    ");

    $pdoStatement -> bindParam(':name', $name);
    $pdoStatement -> bindParam(':city', $city);
    $pdoStatement -> bindParam(':birthDay', $birthDay);

    if($pdoStatement -> execute()){
        print "Ma'lumotlar yuborildi";
    } else{
        print "Xatolik bor!";
    }

}

//MO dan talabalarni o'chirish

if(isset($_POST['deleteName'])){
    $deleteName = $_POST["deleteName"];

    $pdoStatement = $pdo -> prepare("
        DELETE FROM `students`
        WHERE
        givenName = :name
    ");

    $pdoStatement -> bindParam(':name', $deleteName);

    if($pdoStatement -> execute()){
        print ("Ismi {$deleteName} bo'lgan talaba muvaffaqiyatli o'chirildi.");
    } else{
        echo "Xatolik yuz berdi!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP va HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid" text-center>
    <form method="POST" action="" class="row g-8">
        <div class="row gx-5 pt-4">

            <div class="col">
                <label for="birthDay" class="form-label">Ismingiz</label>
                <input type="text" name="givenName" class="form-control rounded-4 border-5 border-black" placeholder="Murod" aria-label="First name">
            </div>

            <div class="col">
                <label for="birthDay" class="form-label">Tug'ilgan Shaxringiz</label>
                <input type="text" name="city" class="form-control rounded-4 border-5 border-black" placeholder="Jizzakh" aria-label="Last name">
            </div>

        </div>

        <div class="row gx-5 pt-4">
            <div class="col">

                <div class="col">
                <label for="birthDay" class="form-label">Tug'ilgan sanangiz</label>
                    <input type="date" name="birthDay" id="birthDay" class="form-control rounded-4 border-5 border-black" aria-label="Last name">
                </div>

            </div>
        </div>

        <div class="row gx-5 pt-4">
            <div class="col">

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Yuborish</button>
                </div>

            </div>
        </div>
    </form>
</div>


<div class="container-fluid" text-center>
    <form method="POST" action="" class="row g-8">
        <div class="row gx-5 pt-4">

            <div class="col">
                <label for="birthDay" class="form-label">O'chirish</label>
                <input type="text" name="deleteName" class="form-control rounded-4 border-5 border-black" placeholder="Murod" aria-label="First name">
            </div>

        </div>

        <div class="row gx-5 pt-4">
            <div class="col">

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Yuborish</button>
                </div>

            </div>
        </div>
    </form>
</div>

</body>
</html>