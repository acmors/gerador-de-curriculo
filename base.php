<?php

if(isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['sobre'], $_POST['experiencia1'], $_POST['experiencia2'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sobre = $_POST['sobre'];
    $experiencia1 = $_POST['experiencia1'];
    $experiencia2 = $_POST['experiencia2'];

    if($nome == '' || $email == '' || $telefone == '' | $sobre == '' || $experiencia1 == '' || $experiencia2== '' ){
        echo 'Preencha todos os dados por favor!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Resultado do currículo</title>
</head>
<body>
    <div class="box">
        <div class="nome">
            <img src="https://www.promoview.com.br/uploads/images/unnamed%2819%29.png" alt="ilustração">
            <h2><?= $nome ?></h2>
            <h3><?= $email?></h3>
            <h3><?= $telefone?></h3>
        </div>

        <div class="meio-curriculo">
            <div class="sobre">
                <p><?= $sobre ?></p>
            </div>
            <div class="experienciaa">
                <ul>
                    <li><?= $experiencia1 ?></li>
                    <li><?= $experiencia2 ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>