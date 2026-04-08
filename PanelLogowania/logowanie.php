<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Logowania</title>
    <style>
        html, body{
            padding: 0;
            margin: 0;
        }
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            background-color:rgb(121, 121, 121);
        }
        #login{
            width: 200px;
            height: 50px;   
            transition: .3s;
            text-align: center;
            border-radius: 10px;
            margin:10px;
            
        }
        #pass{
             width: 200px;
            height: 50px;   
            transition: .3s;
            border-radius: 10px;
            text-align: center;
            margin-bottom:10px;
        }
        form{
            padding: 50px;
            background-color:rgb(150, 150, 150);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
        }
        #btn{
            width: 200px;
            transition: 1s;
            border-radius: 20px;
            margin:10px;
        }
    </style>
</head>
<body>
    <form action="zalogowano.php" method="post">
        <input type="text" id='login' name='login' placeholder='login'>
        <input type="password" id="password" name="password" placeholder="password">
        <button type="submit">Zaloguj</button>
    </form>
</body>
</html>