<?php
session_start();
include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$sugestao = filter_input(INPUT_POST, 'sugestao', FILTER_SANITIZE_STRING);


//echo "email: $email <br>";
//echo "sugestao: $sugestao <br>";


$result_contatos = "INSERT INTO contatos (email, sugestao, created) VALUES ('$email', '$sugestao', NOW())";
$resultado_contatos = mysqli_query($conn, $result_contatos);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:red;'>Erro na sugestão enviada</p>";
	header("Location: contatos.php");
}else{
	$_SESSION['msg'] = "<p style='color:green;'>Sugestão enviada com sucesso</p>";
	header("Location: contatos.php");
}
