<?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
    !empty($_POST['newName']) && !empty($_POST['newPassword'])
        ? header("Location: farmeAura.php")
        : header("Location: newAccount.php?error=1");
    exit;
}
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta aqui</title>
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
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Crie sua conta</h1>

        <div id="newNameDiv">
        <label for="newName">Crie seu nome:</label>
        <input type="text" name="newName" id="newName">
        </div>

        <div id="newPasswordDiv">
        <label for="newPassword">Crie sua senha:</label>
        <input type="password" name="newPassword" id="newPassword">
        </div>

        <button type="submit">Criar</button>
    </form>
    
</body>
</html>