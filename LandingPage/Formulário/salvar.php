<?php
    include 'conexao.php';
   
 
        
    

    $email = $_POST["femail"];
    $telefone = $_POST["ftelefone"];
    $pass = $_POST["fpass"];
    $chamar = $_POST["fchamar"];
    $data = $_POST["datinha"];
    $sql = mysqli_query($conexaobd , "INSERT INTO dados(email , telefone , senha , chamar , datinha) VALUES('$email' , '$telefone' , '$pass' , '$chamar' , '$data')");

    if (isset($sql)) {
          /*  header("location: form.php");  */
      }

   

?>