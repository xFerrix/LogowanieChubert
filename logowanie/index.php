<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGOWANIE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p style="font-size: 0.1rem;"> epilepsy warning </p>
    <form action="zalogowany.php" method='post'>
        <input type="text" name="login" id="login" placeholder='login'><br> <br>
        <input type="password" name="pass" id="pass" placeholder='Haslo'><br> <br> <br>
        <input type="checkbox" name="check" id="check">
        <button type="submit" id='btn'>Wyslij</button>
    </form>
</body>
</html>