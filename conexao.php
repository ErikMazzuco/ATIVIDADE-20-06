<?php
// Criando uma conexão com o bando de dados
$con = mysqli_connect("localhost","root","","atividade");

// Checando a conexão
if (mysqli_connect_errno($con)){

echo "Erro ao conectar com a base de dados: ".
mysqli_connect_error();

}else{

echo "Conexão Aberta";
//mysqli_close($con);
}

?>