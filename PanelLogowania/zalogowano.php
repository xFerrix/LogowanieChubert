<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $login = $_POST['login'];
    $haslo = $_POST['password'];
    $zalogowany = false;
            $users = [
            ["login" => "arni9", "password" => "1234"],
            ["login" => "arni8", "password" => "12344"],
            ["login" => "arni7", "password" => "12343"],
            ["login" => "arni6", "password" => "12342"],
            ["login" => "arni5", "password" => "12341"],
        ];
    foreach($users as $element){
            if($login == $element['login'] && $haslo == $element['password']){
                $zalogowany=true;
                break;
            }   
        };
    if($zalogowany){
        echo "<script> window.location.href = 'panel.php' </script>";
    }
    if($zalogowany ==  false){
        echo "<script> window.location.href = 'logowanie.php' </script>";
        echo "<p style='color: red;'> nie zalogowano </p>";
    }

    ?>
</body>
</html>