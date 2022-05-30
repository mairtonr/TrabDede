<?php
    error_reporting(0);
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

   <div class="titulos"> 
    <h1>Formulário</h1>
    <h3>Preencha as informações necessárias para o avanço</h3>
</div>
    <form class="formu" name="form" action="form.php" method="post">
    <div class="row g-3">
<div class="col-sm-2"></div>
<div class="col-sm-4">
    <label id="lemail">Email</label>
    <input name="femail" type="email" class="form-control" placeholder="Ex: adeilson@gmail.com" id="fnome" required>
</div>

      
        <div class="col-sm-4">
            <label class="label">Telefone:</label>
            <input nome="ftelefone"type="tel" class="form-control" placeholder="(00) 0 0000-0000" maxlength="11" id="tel" oninput="mascaratel('tele')" inputmode="numeric">
        </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <label class="label">Crie sua senha:</label>
            <input nome="fpass"type="password" class="form-control" placeholder="Crie sua senha" required>
        </div>
        
        <div class="col-sm-4">
            <label class="label">Como devemos chamar você:</label>
            <input name="fchamar"type="text" class="form-control" placeholder="Insira um nome de perfil">
           </div> 
        </div> <br>
    
    <div class="row g-3">
        <div class="col-md-2"></div>
        <div class="col-sm-3">
            <label class="label">Qual sua data de nascimento:</label>
            <input type="date" class="form-control" name="datinha">
        </div>
    
    
        <div class="col-sm-1"></div>
        <div class="col-sm-4" >
            <label class="label">Qual seu gênero?</label>
            <div id="camporadio">
            <input class="bolinha" type="radio" name="genero" value="[masculino">
            <label class="radios">Masculino</label>
            <input class="bolinha" type="radio" name="genero" value="Feminino">
            <label class="radios" >Feminino</label>
            <input class="bolinha" type="radio" name="genero" value="nao binario">
            <label class="radios">Não binário</label>
            </div>
        </div>
    </div> <br>
    <div class="row g-3">
        <div class="col-sm-5"></div>
        
            <button id="but" type="submit" class="btn btn-primary" id="botao">Inscrever-se</button>
        
    </div>
</form>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>