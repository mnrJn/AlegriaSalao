<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '123456789';
$dbName = 'salao';

$conexao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if ($conexao->connect_errno){
die("ERRO NA CONEXÃO:" . $conexao->connect_error);

}
$id_cliente =$_POST['id_cliente'];
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$data_cadastro=$_POST['data_cadastro'];
$sql= "INSERT INTO cliente (id_cliente,nome,cpf,telefone,email,data_cadastro) VALUES ('$id_cliente','$nome','$cpf','$telefone','$email','$data_cadastro')";
if($conexao->query($sql)===TRUE){
    echo "Aluno Cadastrado com sucesso!!!";
}
else{
    echo "Erro ao Cadastrar: ". $conexao->error;
}
$conexao->close();
?>


