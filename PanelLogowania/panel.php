<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
        html,
        body {
            font-family: 'Roboto';
            display: flex;
            padding: 0;
            margin: 0;
            flex-direction: row;
            overflow: hidden;
        }

        .left {
            border-right: black solid 3px;
            width: 15vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .right {
            width: 85vw;
            height: 100vh;
        }

        nav {
            display: flex;
            justify-content: center;
            height: 15vh;
            width: 85vw;
            border-bottom: black solid 3px;
        }
        nav h1{
            margin-top: 50px;
        }
        main {
            width: 85vw;
            height: 62vh;
        }

        footer {
            border-top: black solid 3px;
            width: 85vw;
            height: 23vh;
        }

        .dodaj form input {
            border: none;
            border-radius: 7px;
            width: 300px;
            height: 30px;
            background-color: aliceblue;
            border: gray solid 2px;
        }

        #opis {
            height: 120px;
        }

        .dodaj {
            display: flex;
            justify-content: center;
        }

        .dodaj form {
            margin: 10px;
        }

        .dodaj form button {
            background-color: aliceblue;
            border: gray solid 2px;
            border-radius: 7px;
            width: 300px;
        }
    </style>
</head>

<body>

    <div class="left">
    </div>
    <div class="right">
        <nav>
            <a href="index.php">Wyloguj sie</a>
            <h1>Artykuly</h1>
        </nav>
        <main>
            <div class="dodaj">
                <?php
        echo "
    <form method='post'>
         <input type=\"text\" name=\"tytul\" id=\"tytul\" placeholder='Tytul'><br> <br>
        <input type=\"text\" name=\"opis\" id=\"opis\" placeholder='Opis'> <br> <br> 
        <input type=\"text\" name='img' id='img' placeholder='Link do zdjecia'> <br> <br>
        <button type=\"submit\">Przeslij do bazy</button>
    </form>
            "; 

        ?>
            </div>


            <?php
$server = 'localhost';
$baza = 'panellogowania';
$user = 'root';
$password = '';
$polaczenie = new mysqli($server, $user, $password, $baza);
if(mysqli_connect_error() != 0){
    echo 'blad polaczenia do bazy danych'.mysqli_connect_error();
}else{
    echo "<script type='text/javascript'>alert('Poloczenie do bazy danych powiodlo sie.');</script>";
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
$sql2 = "SELECT * from artykuly";

$result = mysqli_query($polaczenie, $sql2);
echo "<br> <br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "Tytul: " . $row['Tytul'] . "<br>";
    echo "Opis: " . $row['Opis'] . "<br>";
    echo "<img src=\"" . $row['zdjecie'] ."\"> <br>";
}


mysqli_close($polaczenie);
?>



        </main>
        <footer>

        </footer>
    </div>

</body>

</html>