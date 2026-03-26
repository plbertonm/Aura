 <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
    !empty($_POST['name']) && !empty($_POST['password'])
        ? header("Location: farmeAura.php")
        : header("Location: login.php?error=1");
    exit;
}
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aura</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
        } 
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 450px;
            height: 500px;
            border-radius: 50px;
            border: 1px solid black;
        }
        #newAccount{
            display: flex;
            flex-direction: row;
            gap: 5px;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
 
    <form action="" method="post">

       <h1>AURA sigma.</h1>

        <div id="nameDiv">
        <label for="name">Insira seu nome:</label>
        <input type="text" name="name" id="name">
        </div>

        <div id="passwordDiv">
        <label for="password">Insira sua senha:</label>
        <input type="password" name="password" id="password">
        </div>

        <button type="submit">Logar</button>

        <div id="newAccount">
    <h3>Ainda não tem conta?</h3>
    <h4>Crie uma:</h4>
    <a href="newAccount.php">aqui</a>
    </div>

    </form>
</body>
</html>