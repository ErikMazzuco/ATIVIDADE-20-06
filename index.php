<?php
//inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="utf-8">
<title> Cadastrar: </title>

</head>
<body>

<h1>Cadastrar Funcionario</h1>

<?php
//se existir a variavel imprime a variavel global
if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
?>

<form method="POST" action="processa.php">
<label>Nome: </label>
<input type="text" name="nome"  placeholder="Digite o nome completo"><br><br>

<label>endrereço: </label>
<input type="text" name="edereco" placeholder="Digite o seu melhor e-mail"><br><br>

<label>cargo: </label>
<input type="text" name="cargo" placeholder="Digite o seu melhor e-mail"><br><br>

<label>data adimissao: </label>
<input type="date" name="datain" placeholder="Digite o seu melhor e-mail"><br><br>


<label>data demissao: </label>
<input type="date" name="dataout" placeholder="Digite o seu melhor e-mail"><br><br>




<input type="submit" value="Cadastrar">

</form>

</body>

</html>