<?php
//inicia a sessão da página
session_start();
include("conexao.php");

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$cargo = $_POST["cargo"];
$datain = $_POST["datain"];
$dataout = $_POST["dataout"];

$result_funcionario = "insert into funcionarios (nome, endereco,cargo,datain,dataout) 
VALUES ('$nome', '$endereco','$cargo','$datain','$dataout')";

$mysql = mysqli_query($con, $result_funcionario);
//se inserir com sucesso
//apresenta msg caso der certo
if(mysqli_insert_id($con)){

    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com
    
    sucesso</p>";
    
    //redireciona para o arquivo index
    header("Location: index.php");
    
    }else{
    
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    
    header("Location: index.php");
    
    }

    ?>