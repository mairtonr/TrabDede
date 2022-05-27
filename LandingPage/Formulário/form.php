<?php

    include 'conexao.php';
    include 'salvar.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <div class="container">

   
    <form name="form" iaction="" method="post">
    <div class="row g-3">
<div class="col-sm-4"></div>
<div class="col-sm-4">
    <label>Email</label>
    <input name="femail" type="email" class="form-control" placeholder="Insira seu Email">
</div>

    </div>
    <div class="row g-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><br>
            <label class="label">Telefone:</label>
            <input nome="ftelefone"type="tel" class="form-control" placeholder="Digite seu número" maxlength="11" id="tel" oninput="mascaratel('tele')">
        </div>
    </div>
    <div class="row g-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><br>
            <label class="label">Crie sua senha:</label>
            <input  nome="fpass"type="password" class="form-control" placeholder="Crie sua senha">
        </div>
    </div>
    <div class="row g-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><br>
            <label class="label">Como devemos chamar você:</label>
            <input name="fchamar"type="text" class="form-control" placeholder="Insira um nome de perfil">
           </div> 
    </div>
    <div class="row g-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-2"><br>
            <label class="label">Qual sua data de nascimento:</label>
            <input type="date" class="form-control" name="datinha">
        </div>
    </div>
    <div class="row g-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" ><br>
            <label class="label">Qual seu gênero?</label>
            <div id="camporadio">
            <input type="radio" name="genero">
            <label>Masculino</label>
            <input type="radio" name="genero">
            <label>Feminino</label>
            <input type="radio" name="genero">
            <label>Não binário</label>
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><br>
            <button type="submit" class="btn btn-primary" id="botao">Inscrever-se</button>
        </div>
    </div>
</form>
<script src="script.js"></script>
</body>
</html>