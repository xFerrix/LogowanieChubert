<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body{
            display: flex;
            padding: 0;
            margin: 0;
            flex-direction: row;
        }
        .left{
            background-color: #e6c4b8;
            width: 15vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .right{
            width: 100vw;
            height: 100vh;
        }
        nav{
            background-color: #e6c4b8;
            height: 15vh;
            width: 100vw;
        }
        main{
            background-color: #ffffff;
            width: 100vw;
            height: 62vh;
        }
        footer{
            background-color: #ffffff;
            width: 100vw;
            height: 23vh;
        }
    </style>
</head>
<body>
    <div class="right">
        <nav>
            <a href="logowanie.php">Zaloguj sie</a>
        </nav>
        <main>

        </main>
        <footer>

        </footer>
    </div>

</body>
</html>