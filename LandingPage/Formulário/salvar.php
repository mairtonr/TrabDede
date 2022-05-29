<?php
    include 'conexao.php';
   
    
    $radio = $_POST["genero"];
    $email = $_POST["femail"];
    $telefone = $_POST["ftelefone"];
    $pass = $_POST["fpass"];
    $chamar = $_POST["fchamar"];
    $data = $_POST["datinha"];
    $sql = mysqli_query($conexaobd , "INSERT INTO dados(email , telefone , senha , chamar , datinha , genero) VALUES('$email' , '$telefone' , '$pass' , '$chamar' , '$data' , '$radio')");

    if (isset($sql)) {
          /*  header("location: form.php");  */
      }

   

?>