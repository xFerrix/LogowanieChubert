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
            padding-left: 730px;
            height: 15vh;
            width: 85vw;
            border-bottom: black solid 3px;
        }

        nav h1 {
            margin-top: 50px;
        }

        main {
            padding-left: 40px;
            width: 85vw;
            height: 62vh;
            display: flex;
            overflow-y: auto;
            flex-wrap: wrap;
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

        .art {
            width: 270px;
            height: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
            border-radius: 15px;
            background-color: #279AF1;
        }

        .art img {
            width: 150px;
            height: 150px;
        }
        .dodaj{
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        .bottom{
            display: flex;
            flex-wrap: wrap;
        }
        .art button{
            border: none;
            border-radius: 5px;
            margin: 2px;
        }
        nav a{
            margin-top: 50px;
            margin-left: 700px;
        }
        .kolo{
            width: 50px;
            height: 50px;
            border-radius: 25px;
            background-color: black;
            color: white;
            font-size: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .left ul a {
            text-decoration: none;
            color: black;
            font-size: x-large;
        }
        .left ul{
            list-style: none;
        }
    </style>
</head>

<body>

    <div class="left">
        <ul>
        <a href="#"><li>Artykuly</li></a>
        </ul>
    </div>
    <div class="right">
        <nav>
            <h1>Artykuly</h1>
            <a href="logowanie.php">Zaloguj sie</a>
        </nav>
        <main>
            <div class="dodaj">
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
};
$sql2 = "SELECT * from artykuly";

$result = mysqli_query($polaczenie, $sql2);
echo "<br> <br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class = \"art\">";
    echo "Tytul: " . $row['Tytul'] . "<br>";
    echo "Opis: " . $row['Opis'] . "<br>";
    echo "<img src=\"" . $row['zdjecie'] ."\"> <br>";
    echo "</div>";
}
mysqli_close($polaczenie);
?>
        </main>
        <footer>
        </footer>
    </div>

</body>

</html>