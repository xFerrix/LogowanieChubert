<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-color:beige;
            text-align: center;
        }
        p{
            padding: 20px;
        }
        #success{
            background-color:#99EDC3;
        }
        
        #fail{
            background-color:#CD5C5C;
        }
    </style>
</head>
<body>
    <?php
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $users = [
            ["login" => "arni9", "password" => "1234"],
            ["login" => "arni8", "password" => "12344"],
            ["login" => "arni7", "password" => "12343"],
            ["login" => "arni6", "password" => "12342"],
            ["login" => "arni5", "password" => "12341"],
        ];
        if(isset($_POST['check'])){
            $check = false;
        }else{
            echo "<script> window.location.href = 'index.php' </script>";
        };
        $check = $_POST['check'];
        $islogged = false;
        foreach($users as $element){
            if($login == $element['login'] && $pass == $element['password'] && $check == true){
                $islogged=true;
                break;
            }       
        };
        if($islogged==true){
            echo "<p id='success'>Logowanie zakonczone pomyslnie</p>";
            echo "<button onclick=\"window.location.href = 'index.php'\">Wyloguj</button>";      
            echo "
            
    <hr> 
    <form action=\"dodawanie.php\" method='post'>
         <input type=\"text\" name=\"tytul\" id=\"tytul\" placeholder='tytul'><br> <br>
        <input type=\"text\" name=\"opis\" id=\"opis\" placeholder='opis'> <br> <br> 
        <input type=\"text\" name='img' id='img' placeholder='link do zdjecia'> <br> <br>
        <button type=\"submit\">przeslij do bazy</button>
    </form>
            ";     
        }
        
        if($islogged==false){
            echo "<p id='fail'>Zly login lub haslo</p>";
            echo "<button onclick=\"window.location.href = 'index.php'\">Wroc do logowania</button>";
        }
    ?>

</body>
</html>