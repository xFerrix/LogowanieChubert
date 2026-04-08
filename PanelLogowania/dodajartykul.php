<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        body,html{
            display: flex;
            font-family: 'Roboto';
            justify-content:center;
            align-items: center;
            font-family:;
        }
        a{
            text-decoration: none;
            color:black;
        }
        input{
            border: none;
            border-radius: 5px;
            background-color: lightgray;
        }
        button{
            width: 200px;
        }
    </style>
</head>
<body>
    <?php
                echo "
    <form method='post' id='submit'>
         <input type=\"text\" name=\"tytul\" id=\"tytul\" placeholder='Tytul'><br> <br>
        <input type=\"text\" name=\"opis\" id=\"opis\" placeholder='Opis'> <br> <br> 
        <input type=\"text\" name='img' id='img' placeholder='Link do zdjecia'> <br> <br>
        <button type=\"submit\" id=\"submit\">Przeslij do bazy</button>
    </form>
            "; 
    ?>

    <a href="panel.php">artykuly</a>
<?php
$server = 'localhost';
$baza = 'panellogowania';
$user = 'root';
$password = '';
$polaczenie = new mysqli($server, $user, $password, $baza);
if(mysqli_connect_error() != 0){
    echo 'blad polaczenia do bazy danych'.mysqli_connect_error();
}else{
};

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tytul = $_POST['tytul'];
    $opis = $_POST['opis'];
    $img = $_POST['img'];
    if($tytul != "" && $opis != "" && $img != ""){
    $sql = "INSERT INTO artykuly (Tytul, Opis, zdjecie) VALUES ('$tytul', '$opis', '$img')"; 

    if (mysqli_query($polaczenie, $sql)) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . mysqli_error($polaczenie);
    }

if (mysqli_query($polaczenie, $sql)) {
     echo "";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($polaczenie);
}
    }
}

mysqli_close($polaczenie);

?>

</body>
</html>