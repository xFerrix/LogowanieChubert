<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EDYTUJ ARTYKUL</h1>
    <form method='post'>
        <input type="text" placeholder='tytul' name='tytul' id='tytul'>
        <input type="text" placeholder='opis' name='opis' id='opis'>
        <input type="text" placeholder='link do zdjecia' name='img' id='img'>
        <button type="submit">Edytuj</button>
    </form>
    <a href="panel.php">Panel</a>
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
        session_start();
        $id = print_r($_SESSION['formdata'], true);


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tytul = $_POST['tytul'];
        $opis = $_POST['opis'];
        $img = $_POST['img'];
        if($tytul != "" && $opis != "" && $img != ""){
        $sql = "UPDATE artykuly
        SET Tytul = '$tytul', Opis = '$opis', zdjecie = '$img'
WHERE id = $id;";
 
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
    ?>
</body>
</html>