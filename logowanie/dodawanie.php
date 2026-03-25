<?php
$server = 'localhost';
$port = 3306;
$baza = 'logowanie3ct';
$user = 'root';
$password = '';
$polaczenie = new mysqli($server, $user, $password, $baza, $port);
if(mysqli_connect_errno() != 0){
    echo 'blad polaczenia do bazy danych'.mysqli_connect_error();
}else{
    echo 'polaczenie do bazy danych powiodlo sie';
};

$tytul = $_POST['tytul'];
$opis = $_POST['opis'];
$img = $_POST['img'];

$sql = "INSERT INTO artykuly (Tytul, Opis, IMG) VALUES ('$tytul', '$opis', '$img')"; 
$sql2 = "SELECT * from artykuly";
if (mysqli_query($polaczenie, $sql)) {
     echo "<br> New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($polaczenie);
}
$result = mysqli_query($polaczenie, $sql2);
echo "<br> <br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "Tytul: " . $row['Tytul'] . "<br>";
    echo "Opis: " . $row['Opis'] . "<br>";
    echo "<img src=\"" . $row['IMG'] ."\"";
}

echo "<br> <br><button onclick=\"window.location.href = 'zalogowany.php'\">wroc do dodawania</button> ";


mysqli_close($polaczenie);
?>