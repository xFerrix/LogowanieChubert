<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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